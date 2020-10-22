<?php

/**
 * @link https://yandex.ru/support/delivery/api.html
 * @link http://docs.yandexdelivery.apiary.io/
 * @link https://tech.yandex.ru/maps/jsapi/
 *
 *
 * @property-read string $client_id идентификатор аккаунта в сервисе
 * @property-read string $sender_id идентификаторы и URL магазинов из аккаунта в сервисе
 * @property-read string $warehouse_id
 * @property-read string[] $method_keys ключи для использования каждого ресурса openAPI
 * @property-read string[] $city город отправления
 * @property-read array[] $size настройки размеров
 * @property-read string $insurance
 * @property-read boolean[] $integration
 * @property-read string $shipping_type
 * @property-read boolean $yd_warehouse
 * @property-read string $map
 * @property-read string $taxes
 * @property-read boolean $debug
 */
class yandexdeliveryShipping extends waShipping
{
    /**
     * @var string https://delivery.yandex.ru/api/<версия_API>/<метод>
     */
    private $url = 'https://delivery.yandex.ru/api/%s/%s';
    private $api_version = '1.0';

    private $cache_key = null;

    public function allowedCurrency()
    {
        return 'RUB';
    }

    public function allowedWeightUnit()
    {
        return 'kg';
    }

    public function allowedLinearUnit()
    {
        return 'cm';
    }

    public function allowedAddress()
    {
        return array(
            array(
                'country' => 'rus',
            ),
        );
    }

    public function requestedAddressFields()
    {
        return array(
            'city'   => array(
                'cost'     => true,
                'required' => true,
            ),
            'street' => array(),
            'zip'    => array(),
        );
    }

    public function customFields(waOrder $order)
    {
        $this->registerControl('YandexdeliveryDate', array($this, 'settingDateControl'));
        $fields = parent::customFields($order);
        $shipping_params = $order->shipping_params;
        $fields['geo_id_to'] = array(
            'value'            => ifset($shipping_params['geo_id_to']),
            'title'            => 'Город доставки',
            'control_type'     => waHtmlControl::SELECT,
            'description'      => 'Уточните адрес',
            'options_callback' => array($this, 'getGeocodeOptions'),
            'data'             => array(
                'affects-rate' => true,
            ),
        );

        $options = array(
            array(
                'value'       => 'todoor',
                'title'       => 'Все курьерские службы',
                'group'       => 'Курьером',
                'description' => 'description_placeholder',
            ),
            array(
                'value'       => 'pickup',
                'title'       => 'Все пункты самовывоза',
                'group'       => 'Самовывоз',
                'description' => 'description_placeholder',
            ),
            array(
                'value'       => 'post',
                'title'       => 'Все почтовые службы',
                'group'       => 'Почтовой службой',
                'description' => 'description_placeholder',
            ),

        );

        $fields['_js'] = array(
            'value'        => null,
            'title'        => '',
            'description'  => '',
            'control_type' => 'YandexFilterControl',
            'options'      => $options,
        );

        if (wa()->getEnv() !== 'backend') {
            $this->registerControl('YandexFilterControl', array($this, 'settingFilterControl'));
        } else {
            $this->registerControl('YandexFilterControl', array($this, 'settingFilterBackendControl'));
            $fields['_js']['subtype'] = waHtmlControl::HIDDEN;
        }

        $setting = array();

        $value = array();

        if (!empty($shipping_params['desired_delivery.interval'])) {
            $value['interval'] = $shipping_params['desired_delivery.interval'];
            $value['interval'] = preg_replace('@(^\-)(\d:)@', '$10$2', $value['interval']);
        }
        if (!empty($shipping_params['desired_delivery.date_str'])) {
            $value['date_str'] = $shipping_params['desired_delivery.date_str'];
        }
        if (!empty($shipping_params['desired_delivery.date'])) {
            $value['date'] = $shipping_params['desired_delivery.date'];
        }

        $fields['desired_delivery'] = array(
            'value'        => $value,
            'title'        => 'Желаемое время доставки',
            'control_type' => 'YandexdeliveryDate',
            'params'       => array(
                'date'      => 0,
                'interval'  => ifset($setting['interval']),
                'intervals' => ifset($setting['intervals']),
            ),
        );

        return $fields;
    }

    public function getStateFields($state, waOrder $order = null, $params = array())
    {
        $fields = parent::getStateFields($state, $order, $params);
        switch ($state) {
            case self::STATE_READY:
                $fields['shipment_date'] = array(
                    'value'        => date('Y-m-d', strtotime('tomorrow')),
                    'title'        => 'Дата отгрузка',
                    'description'  => 'Укажите дату отгрузки заказа в службу доставки',
                    'control_type' => waHtmlControl::INPUT,
                );
                break;
        }

        return $fields;
    }

    /**
     * @return float
     */
    protected function correctItems()
    {
        $items_discount = $this->getPackageProperty('items_discount');
        $total_discount = $this->getPackageProperty('total_discount');
        if ($items_discount != $total_discount) {
            $total = $this->getTotalRawPrice();
            $items = $this->getItems();
            $discount = min(1.0, $total_discount / $total);
            foreach ($items as &$item) {
                // weight property is required by usps, so if not exist set to default 1
                $item['discount'] = $discount * $item['price'];
                $item['total_discount'] = $item['discount'] * $item['quantity'];
            }
            unset($item);


            $this->setItems($items);
            if ($total_discount > $total) {
                return $total_discount - $total;
            }
        }
        return 0.0;
    }

    /**
     * Set package state into waShipping::STATE_DRAFT
     * @param waOrder $order
     * @param array $shipping_data
     * @return null|string|string[] null, error or shipping data array
     */
    protected function draftPackage(waOrder $order, $shipping_data = array())
    {
        $integration = $this->integration;
        if (empty($integration[self::STATE_DRAFT])) {
            return null;
        }
        $data = array();
        if (empty($order->shipping_data['order_id'])) {
            $method = 'createOrder';
        } else {
            $data['order_id'] = $order->shipping_data['order_id'];
            $method = 'updateOrder';
        }
        $weight = $this->getTotalWeight();
        $size = $this->getPackageSize($weight);

        $shipping_discount = $this->correctItems();

        $data += array(
            'order_requisite' => null,//number ID реквизитов магазина
            'order_warehouse' => ($this->shipping_type == 'import') ? null : $this->warehouse_id,//number ID склада
            'order_num'       => $order->id,//number Номер заказа магазина (не больше 15 цифр)

            'order_weight' => $weight,//Вес заказа, кг

            'order_length'            => $size['length'],      //number Длина заказа, см (округляется до целого в большую сторону)
            'order_width'             => $size['width'],       //number Ширина заказа, см (округляется до целого в большую сторону)
            'order_height'            => $size['height'],      //number Высота заказа, см (округляется до целого в большую сторону)
            'order_assessed_value'    => $this->getAssessedPrice($this->insurance),//number Объявленная ценность, руб.
            'order_delivery_cost'     => round($order->shipping - $shipping_discount),     //number Стоимость доставки, руб.
            'is_manual_delivery_cost' => empty($shipping_discount) ? 0 : 1,

            'order_amount_prepaid' => $order->paid_datetime ? $this->getPackageProperty('price') : null,                 //number Сумма предоплаты по заказу, руб. (    300)
            //'order_total_cost'           => $this->getPackageProperty('price'),

            'order_shipment_date' => null,//$order->shipping_data['shipment_date'], //string 03 - 13 (string)-Дата отгрузки заказа 2017
            'order_shipment_type' => preg_replace('@\..+$@', '', $order->shipping_rate_id),

            'order_comment' => $order->comment,
            'order_items'   => array(),
        );
        $delivery = explode(':', preg_replace('@[^\.]+\.([^\.]+)(\.[^\.]+)?$@', '$1', $order->shipping_rate_id));


        $data['delivery'] = array(
            'pickuppoint' => ($data['order_shipment_type'] == 'pickup' ? preg_replace('@^pickup\.[^\.]+\.(.+)$@', '$1', $order->shipping_rate_id) : null),
            'tariff'      => ifset($delivery[1]),
            'delivery'    => $delivery[0],


            'to_yd_warehouse' => $this->yd_warehouse ? 1 : 0,
        );

        $shipping_address = $order->shipping_address;

        if ($data['order_shipment_type'] != 'pickup') {
            $data['deliverypoint'] = array(
                'city'   => ifset($shipping_address['city']),
                'index'  => ifset($shipping_address['zip']),
                'street' => ifset($shipping_address['street']),
            );

            if (!empty($order['shipping_params']['geo_id_to'])) {
                $data['deliverypoint']['geo_id'] = (int)$order['shipping_params']['geo_id_to'];
            } elseif (!empty($order['shipping_params_geo_id_to'])) {
                $data['deliverypoint']['geo_id'] = (int)$order['shipping_params']['geo_id_to'];
            }
        }

        $data['recipient'] = array(
            'first_name'  => ifempty($shipping_address['firstname'], $order->getContactField('firstname')),
            'last_name'   => ifempty($shipping_address['lastname'], $order->getContactField('lastname')),
            'middle_name' => ifempty($shipping_address['middlename'], $order->getContactField('middlename')),
            'email'       => ifempty($shipping_address['email'], $order->getContactField('email')),
            'phone'       => ifempty($shipping_address['phone'], $order->getContactField('phone')),
        );

        foreach ($this->getItems() as $item) {
            $data['order_items'][] = array(
                'orderitem_name'      => $item['name'],      //string Наименование товара (Телевизор)
                'orderitem_quantity'  => $item['quantity'],  //number Количество товара (1)
                'orderitem_cost'      => round($item['price'] - $item['discount']),     //number Цена товара, руб. (12000)
                'orderitem_id'        => $item['id'],        //number ID товара (58767)
                'orderitem_article'   => $item['sku'],       //string Артикул товара (GHY1234)
                'orderitem_weight'    => round($item['weight'], 2),    //number Вес товара, кг (2)
                'orderitem_length'    => ceil($item['length']),    //number Длина товара, см (10)
                'orderitem_width'     => ceil($item['width']),     //number Ширина товара, см (20)
                'orderitem_height'    => ceil($item['height']),    //number Высота товара, см (10)
                'orderitem_vat_value' => $this->getTaxId($item),   //id налоговой ставки
            );
        }

        try {
            $response = $this->apiQuery($method, $data);

            if (empty($order->shipping_data['order_id'])) {
                $template = 'Создан заказ в статусе %s <a href="https://delivery.yandex.ru/order/create?id=%d" target="_blank">№%s<i class="icon16 new-window"></i></a>';
            } else {
                $template = 'Обновлен заказ в статусе %s <a href="https://delivery.yandex.ru/order/create?id=%d" target="_blank">№%s<i class="icon16 new-window"></i></a>';
            }
            $shipping_data = array(
                'order_id'  => $response['order']['id'],
                'status'    => $response['order']['status'],
                'client_id' => $this->client_id,
                'view_data' => sprintf($template, $response['order']['status_label'], $response['order']['id'], $response['order']['full_num']),
            );
            return $shipping_data;
        } catch (waException $ex) {
            return $ex->getMessage();
        }
    }

    private function getTaxId($item)
    {
        switch ($this->taxes) {
            case 'no':
                $id = 6;
                break;
            case 'map':
                $rate = ifset($item['tax_rate']);
                if (in_array($rate, array(null, false, ''), true)) {
                    $rate = -1;
                }
                switch ($rate) {
                    case 18:
                        $id = 1;
                        break;
                    case 10:
                        $id = 2;
                        break;
                    case 0:
                        $id = 5;
                        break;
                    default:
                        $id = 6;
                        break;
                }
                break;

            case 'skip':
            default:
                $id = null;
                break;
        }

        return $id;
    }

    /**
     * Set package state into waShipping::STATE_CANCELED
     * @param waOrder $order
     * @param array $shipping_data
     * @return null|string|string[] null, error or shipping data array
     */
    protected function cancelPackage(waOrder $order, $shipping_data = array())
    {
        $integration = $this->integration;
        if (empty($integration[self::STATE_CANCELED]) || empty($order->shipping_data['order_id'])) {
            return null;
        }

        try {
            $data = array(
                'order_id' => $order->shipping_data['order_id'],
            );
            $response = $this->apiQuery('deleteOrder', $data);
            if ($response == 'ok') {
                return array(
                    'view_data'       => 'Заказ отменен в службе доставки.',
                    'order_id'        => null,
                    'status'          => 'CANCELED',
                    'tracking_number' => null,
                );
            } else {
                return $response;
            }

        } catch (waException $ex) {
            if (!empty($this->api_error['errors']['order_id'])) {
                return $this->api_error['errors']['order_id'];
            }

            return $ex->getMessage();
        }
    }

    /**
     * Set package state into waShipping::STATE_READY
     * @param waOrder $order
     * @param array $shipping_data
     * @return null|string|string[] null, error or shipping data array
     */
    protected function readyPackage(waOrder $order, $shipping_data = array())
    {
        $integration = $this->integration;
        if (empty($integration[self::STATE_READY]) || empty($order->shipping_data['order_id'])) {
            return null;
        }

        try {
            $order_id = $order->shipping_data['order_id'];
            $shipment_date = ifempty($shipping_data['shipment_date'], date('Y-m-d', strtotime('tomorrow')));
            $data = array(
                'order_ids'     => $order_id,
                'shipment_date' => $shipment_date,
                'type'          => $this->shipping_type,
            );

            $response = $this->apiQuery('confirmSenderOrders', $data);
            if (isset($response['result']['error'][$order_id])) {
                $message = 'Ошибка при автоматическом подтверждении отправления. Подтвердите отправление вручную в личном кабинете «Яндекс.Доставки».';
                return $message;
            } elseif (isset($response['result']['success'])) {
                $result = reset($response['result']['success']);
                $data = array(
                    'tracking_number' => $order_id,
                    'status'          => 'CREATED',
                    'shipment_date'   => $shipment_date,
                    'view_data'       => sprintf('Ожидаемая дата отгрузки заказа в службу доставки: %s.', $shipment_date),
                );
                if (isset($result['parcel_id']) && isset($result['orders']) && in_array($order_id, $result['orders'])) {
                    $data['parcel_id'] = $result['parcel_id'];
                }
                return $data;
            } else {
                return null;
            }
        } catch (waException $ex) {
            if ($this->api_error) {
                return 'Ошибка при автоматическом подтверждении отправления. Подтвердите отправление вручную в личном кабинете «Яндекс.Доставки».';
            } else {
                return $ex->getMessage();
            }
        }
    }

    public function getPrintForms(waOrder $order = null)
    {
        $integration = $this->integration;
        $forms = array();
        if (!empty($integration[self::STATE_SHIPPING])) {
            if (!empty($order->shipping_data['order_id'])) {
                $forms['label'] = array(
                    'name'        => 'Ярлык заказа',
                    'description' => '',
                );
            }
            if (!empty($order->shipping_data['parcel_id'])) {
                $forms['parcel'] = array(
                    'name'        => 'Сопроводительные документы',
                    'description' => '',
                );
            }
        }
        return $forms;
    }

    public function displayPrintForm($id, waOrder $order, $params = array())
    {
        switch ($id) {
            case 'label':
                $this->getLabelPrintform($order);
                break;
            case 'parcel':
                $this->getParcelPrintform($order);
                break;
            default:
                throw new waException('Invalid printform ID');
                break;
        }
    }

    private function getLabelPrintform(waOrder $order)
    {
        if (!empty($order->shipping_data['order_id'])) {
            $order_id = $order->shipping_data['order_id'];
            $path = wa()->getDataPath('shipping-plugins/yandexdelivery');
            $path .= sprintf('label/%d/%d.pdf', $order_id % 100, $order_id);
            if (!file_exists($path)) {
                $params = array(
                    'order_id ' => $order_id,
                    'is_raw'    => 0, //     0 — ярлык в формате PDF; , 1 — ярлык в формате HTML
                );
                $raw = $this->apiQuery('getSenderOrderLabel', $params);
                // Содержимое, закодированное в Base64.
                $form = base64_decode($raw);
                waFiles::write($path, $form);
            }
            /** order_label_1234567_2017-12-31_18-59-59.pdf **/
            $template = 'order_label_%d.pdf';
            $name = sprintf($template, $order_id);
            waFiles::readFile($path, $name);
        } else {
            throw new waException('Заказ еще не сформирован в службе доставки.');
        }
    }

    private function getParcelPrintform(waOrder $order)
    {
        if (!empty($order->shipping_data['parcel_id'])) {
            $parcel_id = $order->shipping_data['parcel_id'];
            $path = wa()->getDataPath('shipping-plugins/yandexdelivery');
            $path .= sprintf('parcel/%d/%d.pdf', $parcel_id % 100, $parcel_id);
            if (!file_exists($path)) {
                $data = array(
                    'parcel_id  ' => $parcel_id,
                    'is_raw'      => 0, //     0 — ярлык в формате PDF; , 1 — ярлык в формате HTML
                );
                $raw = $this->apiQuery('getSenderParcelDocs', $data);
                // Содержимое, закодированное в Base64.
                $form = base64_decode($raw);
                waFiles::write($path, $form);
            }
            /** order_label_1234567_2017-12-31_18-59-59.pdf **/

            $template = 'parcel_%d.pdf';
            $name = sprintf($template, $parcel_id);
            waFiles::readFile($path, $name);
        } else {
            throw new waException('Заказ еще не сформирован в службе доставки.');
        }
    }

    public function getSettings($name = null)
    {
        $settings = parent::getSettings($name);
        if (($name === 'method_keys') && is_array($settings)) {
            $options = 0;
            $option_names = array(
                'JSON_PRETTY_PRINT',
                'JSON_UNESCAPED_UNICODE',
            );
            foreach ($option_names as $option_name) {
                if (defined($option_name)) {
                    $options = $options | constant($option_name);
                }
            }
            $settings = json_encode($settings, $options);
        }
        return $settings;
    }

    public function saveSettings($settings = array())
    {
        if (isset($settings['size'])) {
            switch (ifset($settings['size']['type'])) {
                case 'table':
                    uasort($settings['size']['table'], array($this, 'sortSizes'));
                    break;
                case 'fixed':
                    $size = reset($settings['size']['table']);
                    $settings['size']['table'] = array($size);
                    break;
            }
        }
        return parent::saveSettings($settings);
    }

    public function inputDataAction()
    {
        $key = $this->getCacheKey();
        $storage = wa()->getStorage();
        $data = $storage->get($key);
        $storage->del($key);
        if (is_array($data)) {
            $response = array(
                'services' => $data,
                'options'  => $this->getGeocodeOptions(),
            );
            $this->sendJsonData($response);
        } else {
            $this->sendJsonError('No data cached');
        }
    }

    public function autocompleteAction()
    {
        $params = array(
            'term' => waRequest::request('query'),
            'type' => waRequest::request('type'),
        );

        switch ($params['type']) {
            case 'address':
                $params['locality_name'] = waRequest::request('city');
                break;
            case 'street':
                $params['locality_name'] = waRequest::request('city');
                break;
            case 'house':
                $params['street'] = waRequest::request('street');
                break;
        }

        try {
            $data = array();
            $result = $this->apiQuery('autocomplete', $params);
            foreach ($result['suggestions'] as $suggestion) {
                $data[$suggestion['geo_id']] = array(
                    'title' => $suggestion['label'],
                    'value' => $suggestion['value'],
                );
            }
            $this->sendJsonData($data);
        } catch (waException $ex) {
            $this->sendJsonError($ex->getMessage());
        }
    }

    public function getGeocodeOptions()
    {
        $options = array();
        $city = null;
        if (!empty($this->raw_address['city_to'])) {
            $city = $this->raw_address['city_to'];
        } else {
            $city = trim(waRequest::post('city'));
        }

        if (!empty($city)) {

            $params = array(
                'term' => $city,
                'type' => 'locality',
            );

            try {
                $pattern = sprintf('@\b%s\b@ui', preg_quote($city, '@'));

                $result = $this->apiQuery('autocomplete', $params);
                if (!empty($result) && !empty($result['suggestions'])) {
                    foreach ($result['suggestions'] as $suggestion) {
                        if (preg_match($pattern, $suggestion['value'])) {
                            $id = $suggestion['geo_id'];
                            $description = $suggestion['value'];
                            $options[$id] = array(
                                'title'       => $suggestion['label'],
                                'description' => $description,
                                'value'       => sprintf('%d/%s (%s)', $id, ucfirst($city), $description),
                                'data'        => array(
                                    'city' => preg_replace('@,.+$@', '', $description),
                                ),
                            );
                        }
                    }
                }
            } catch (waException $ex) {

                //$this->sendJsonError($ex->getMessage());
            }
        }
        return $options;
    }

    public function getIndexAction()
    {
        $params = array(
            'address' => waRequest::request('address'),
        );

        try {
            $data = $this->apiQuery('getIndex', $params);
            $this->sendJsonData($data);
        } catch (waException $ex) {
            $this->sendJsonError($ex->getMessage());
        }
    }

    public function tracking($tracking_id = null)
    {
        if (!empty($tracking_id)) {
            try {
                $params = array(
                    'order_id' => $tracking_id,
                );
                $status = $this->apiQuery('getSenderOrderStatus', $params);

                switch ($status) {
                    case 'DRAFT':
                        $text = 'Отправление в стадии оформления.';
                        break;
                    case 'CREATED':
                        $text = 'Отправление оформлено.';
                        break;
                    case 'DELIVERY_LOADED':
                        $text = 'Отправление подтвержденно службой доставки и ожидает отгрузки.';
                        break;
                    case 'CANCELED':
                        $text = 'Заказ отменен.';
                        break;
                    default:
                        $text = sprintf('Статус отправления: «%s».', $status);
                }
                return $text;
            } catch (waException $ex) {
                if ($this->api_error) {
                    if (isset($this->api_error['errors']['order_id'])) {
                        return $this->api_error['errors']['order_id'];
                    }
                }
            }
        }
        return null;
    }

    /**
     * @var array
     */
    private $raw_address = array();

    protected function calculate()
    {
        try {
            $params = array();
            $params += $this->prepareAddress();
            $params['weight'] = $this->getTotalWeight();
            $params += $this->getPackageSize($params['weight']);

            $params['to_yd_warehouse'] = $this->yd_warehouse ? 1 : 0;
            $params['assessed_value'] = $this->getAssessedPrice($this->insurance);
            $params['total_cost'] = round($this->getTotalPrice(), 2);
            $params['order_cost'] = $params['total_cost'];
            try {
                $services = $this->apiQuery('searchDeliveryList', $params);
            } catch (waException $ex) {
                switch ($ex->getCode()) {
                    case 500:
                        $message = 'При расчете стоимости доставки произошла ошибка. Повторите попытку позднее.';
                        break;
                    case 403:
                        $message = 'При расчете стоимости доставки произошла ошибка. Проверьте параметры доступа.';
                        break;
                    default:
                        $message = 'При расчете стоимости доставки произошла ошибка.';
                        break;
                }
                throw new waException($message);
            }
            if (empty($services)) {
                throw new waException('Доставка по указанному адресу недоступна.');
            }

            uasort($services, array($this, 'sortServices'));

            $rates = $this->groupServices($services);

            foreach ($services as $service) {
                $rates += $this->formatRate($service);
            }

            $data = array();
            if (!empty($rates)) {
                foreach ($rates as $rate_id => $rate) {
                    if (!empty($rate['custom_data']) && (count($rate['custom_data']) > 1)) {
                        $data[$rate_id] = $rate['custom_data'];
                    }
                }
            }

            //$this->cache_key = md5(var_export($params, true));
            wa()->getStorage()->set($this->getCacheKey(), $data);
            return $rates;
        } catch (waException $ex) {
            return array(
                array(
                    'rate'    => null,
                    'comment' => $ex->getMessage(),
                ),
            );
        }
    }

    private function prepareAddress()
    {
        $address = array(
            'city_from' => mb_strtolower($this->city),
            'city_to'   => mb_strtolower($this->getAddress('city')),
        );
        if (empty($address['city_from'])) {
            throw new waException('Не указан город отправки в настройках плагина.');
        }

        if (empty($address['city_to'])) {
            throw new waException('Не указан город доставки.');
        }

        $params = $this->getPackageProperty('shipping_params');
        if (!empty($params) && !empty($params['geo_id_to'])) {
            if (preg_match('~^\d+\W([^\(]+)\s+\(~', $params['geo_id_to'], $matches)) {
                $city = mb_strtolower($matches[1]);
                if (strcmp($city, $address['city_to']) === 0) {
                    $address['geo_id_to'] = (int)$params['geo_id_to'];
                }
            }
        }

        $this->raw_address = $address;

        return $address;
    }

    private function getPackageSize($weight = null)
    {
        $data = array();
        $size = $this->size;
        switch ($size['type']) {
            case 'fixed':
                $data += reset($size['table']);
                break;
            case 'table':
                $matched_size = array();
                uasort($size['table'], array($this, 'sortSizes'));
                $table = array_reverse($size['table']);
                foreach ($table as $sizes) {
                    if ($weight <= floatval($sizes['weight'])) {
                        $matched_size = $sizes;
                    } else {
                        break;
                    }
                }
                if (empty($matched_size)) {
                    throw new waException('Не найдена подходящая упаковка.');
                }
                $data += $matched_size;
                break;
        }
        $data += array(
            'height' => 10,
            'width'  => 10,
            'length' => 10,
        );
        return $data;
    }

    private function formatRate($service)
    {
        $delivery_date = array(
            strtotime(sprintf('+%d days', $service['minDays'])),
            strtotime(sprintf('+%d days', $service['maxDays'])),
        );

        if (!empty($service['delivery_date'])) {
            $delivery_date = array();
            foreach ($service['delivery_date'] as $date) {
                $delivery_date[] = strtotime($date);
            }

        }

        $delivery_date = array(
            'minDays' => waDateTime::format('humandate', min($delivery_date)),
            'maxDays' => waDateTime::format('humandate', max($delivery_date)),
        );

        $rate = array(
            'name'         => array($service['delivery']['name'], $service['tariffName']),
            'id'           => sprintf('%s:%s', $service['delivery']['id'], $service['tariffId']),
            'est_delivery' => implode(' - ', array_unique($delivery_date)),
            'rate'         => ifset($service['costWithRules'], $service['cost']),
            'currency'     => 'RUB',
        );

        $rate['name'] = implode(': ', array_unique($rate['name']));

        $type = strtolower($service['type']);

        $rate['custom_data'] = array(
            'type' => $type,
        );

        $rates = array();

        switch ($type) {
            case 'post': //Почтой России
                break;
            case 'todoor': //Курьерская
                $schedules = ifset($service['delivery']['courier']['schedules'], array());
                $rate['custom_data']['courier'] = array(
                    'intervals' => array(),
                    'offset'    => intval($service['minDays']),
                );

                $intervals = &$rate['custom_data']['courier']['intervals'];

                foreach ($schedules as $schedule) {
                    $schedule['from'] = preg_replace('@\:00$@', '', $schedule['from']);
                    $schedule['from'] = preg_replace('@^(\d:)@', '0$1', $schedule['from']);
                    $schedule['to'] = preg_replace('@:00$@', '', $schedule['to']);
                    $schedule['to'] = preg_replace('@^(\d:)@', '0$1', $schedule['to']);
                    $interval = sprintf('%s-%s', $schedule['from'], $schedule['to']);
                    if (!isset($intervals[$interval])) {
                        $intervals[$interval] = array();
                    }
                    $intervals[$interval][] = $schedule['day'];
                }

                foreach ($intervals as &$interval) {
                    $interval = array_unique(array_map('intval', $interval));
                    asort($interval);
                    $interval = array_values($interval);
                    unset($interval);
                }

                ksort($intervals, SORT_NATURAL);
                unset($intervals);

                $date_format = waDateTime::getFormat('date');
                $offset = sprintf('+ %d days', $rate['custom_data']['courier']['offset']);
                $rate['custom_data']['courier']['placeholder'] = waDateTime::format($date_format, $offset);
                break;

            case 'pickup': //В пункт самовывоза
                $pickup_points = ifset($service['pickupPoints'], array());
                $rate['custom_data']['pickup'] = array();
                foreach ($pickup_points as $pickup_point) {
                    $rate['custom_data']['pickup'] = $this->formatPickupPoint($pickup_point);
                    $pickup_rate = $rate;
                    $pickup_rate['name'] .= sprintf(' %s', $pickup_point['name']);
                    $pickup_rate['comment'] = ifset($pickup_point['full_address'], '');
                    $id = 'pickup.'.$rate['id'].'.'.$pickup_point['id'];
                    $rates[$id] = $pickup_rate;
                };
                break;
        }

        return $rates ? $rates : array($type.'.'.$rate['id'] => $rate);
    }

    private function formatPickupPoint($pickup_point)
    {
        $schedule = array();
        $days = array(
            1 => 'Пн',
            'Вт',
            'Ср',
            'Чт',
            'Пт',
            'Сб',
            'Вс',
        );

        foreach ($pickup_point['schedules'] as $schedule_item) {
            $day = intval($schedule_item['day']);
            $from = preg_replace('@\:00$@', '', $schedule_item['from']);
            $to = preg_replace('@\:00$@', '', $schedule_item['to']);
            $schedule[$day] = array(
                'days' => array($day),
                'time' => sprintf('%s - %s', $from, $to),
            );
        }
        $prev = null;

        foreach ($schedule as $day => $schedule_item) {
            if ($prev && (strcmp($schedule[$prev]['time'], $schedule_item['time'])) === 0) {
                $schedule[$prev]['days'][] = $day;
                unset($schedule[$day]);
            } else {
                $prev = $day;
            }
        }

        $template = <<<HTML
<div class="yandexdelivery-list-item">%s: %s</div>
HTML;


        foreach ($schedule as $day => &$schedule_item) {
            $day = implode(' - ', array_unique(array($days[min($schedule_item['days'])], $days[max($schedule_item['days'])])));
            $schedule_item = sprintf($template, $day, $schedule_item['time']);
        }
        $schedule = implode($schedule);

        $payment = "";
        $_payments = array();
        if (intval($pickup_point['has_payment_card'])) {
            $_payments[] = "Оплата картой";
        }
        if (intval($pickup_point['has_payment_cash'])) {
            $_payments[] = "Оплата наличными";
        }
        if (intval($pickup_point['has_payment_prepaid'])) {
            $_payments[] = "Предоплата";
        }
        if (!empty($_payments)) {
            $payment = implode($_payments, ", ");
        }

        $comment = ifset($pickup_point['address']['comment'], '');

        $data = array(
            'id'          => $pickup_point['id'],
            'lat'         => $pickup_point['lat'],
            'lng'         => $pickup_point['lng'],
            'title'       => ifset($pickup_point['name'], $pickup_point['id']),
            'description' => ifset($pickup_point['full_address'], ''),
            'comment'     => htmlentities($comment, ENT_QUOTES, 'UTF-8'),
            'payment'     => $payment,
            'schedule'    => $schedule,
        );

        return $data;

    }

    private function groupServices($services)
    {
        $pickup = array(
            'name'         => 'Все пункты выдачи заказов',
            'rate'         => array(),
            'est_delivery' => array(),
            'currency'     => 'RUB',
            'id'           => array(),
            'count'        => 0,
        );

        foreach ($services as $service) {
            if (strtolower($service['type']) == 'pickup') {
                $pickup['rate'][] = $service['cost'];
                $pickup['est_delivery'][] = $service['minDays'];
                $pickup['est_delivery'][] = $service['maxDays'];
                $pickup['id'][] = $service['tariffId'];
                $pickup['count'] += count(ifset($service['pickupPoints'], array()));
            }
        }
        $rates = array();
        if (false && (count($pickup['id']) > 1)) {
            $pickup['rate'] = array_unique(array(min($pickup['rate']), max($pickup['rate'])));
            if (count($pickup['rate']) == 1) {
                $pickup['rate'] = reset($pickup['rate']);
            }

            $pickup['est_delivery'] = array_unique(array(min($pickup['rate']), max($pickup['est_delivery'])));
            foreach ($pickup['est_delivery'] as &$value) {
                $value = waDateTime::format('humandate', strtotime(sprintf('+%d days', $value)));
                unset($value);
            }
            $pickup['est_delivery'] = implode(' — ', $pickup['est_delivery']);
            $pickup['id'] = implode(',', $pickup['id']);
            $pickup['name'] .= sprintf(' × %d', $pickup['count']);
            $rates[$pickup['id']] = $pickup;
        }
        return $rates;
    }

    private function sortServices($a, $b)
    {
        $sort = array(
            'todoor' => 1,
            'pickup' => 2,
            'post'   => 3,
        );
        $sort = max(-1, min(1, ifset($sort[strtolower($a['type'])]) - ifset($sort[strtolower($b['type'])])));

        if ($sort == 0) {
            $sort = strcmp($a['delivery']['name'], $b['delivery']['name']);
        }

        if ($sort == 0) {
            $sort = strcmp($a['tariffName'], $b['tariffName']);
        }

        return $sort;
    }

    private function sortSizes($a, $b)
    {
        if ($a['weight'] > $b['weight']) {
            return 1;
        } elseif ($a['weight'] < $b['weight']) {
            return -1;
        } else {
            return 0;
        }
    }

    private function getCacheKey($key = null)
    {
        return sprintf('wa-plugins/shipping/yandexdelivery/%s/%s/%s', $this->app_id, $this->key, $key ? $key : $this->cache_key);
    }

    protected function initControls()
    {
        parent::initControls();
        $this->registerControl('SizeControl');
    }

    public static function settingSizeControl($name, $params = array())
    {
        $default_params = array(
            'title'         => '',
            'title_wrapper' => false,
            'description'   => '',
        );

        foreach ($params as $field => $param) {
            if (strpos($field, 'wrapper')) {
                unset($params[$field]);
            }
        }

        waHtmlControl::makeId($params, $name);

        if (!isset($params['value']) || !is_array($params['value'])) {
            $params['value'] = array();
        }

        $params = array_merge($params, $default_params);
        waHtmlControl::addNamespace($params, $name);
        unset($name);


        $html = '';

        $radio_params = $params;
        $radio_params['value'] = ifset($params['value']['type']);
        $radio_params['options'] = array(
            array(
                'value'       => 'fixed',
                'title'       => 'Фиксированное значение',
                'description' => '',
            ),
        );
        $html .= waHtmlControl::getControl(waHtmlControl::RADIOGROUP, 'type', $radio_params);


        $html .= ifset($params['control_separator']);
        $radio_params['options'] = array(
            array(
                'value'       => 'table',
                'title'       => 'Таблица размеров',
                'description' => '',
            ),
        );
        $html .= waHtmlControl::getControl(waHtmlControl::RADIOGROUP, 'type', $radio_params);
        $html .= ifset($params['control_separator']);
        waHtmlControl::makeId($radio_params, 'type');

        $html .= <<<HTML
<table class="zebra" id="{$params['id']}">
<thead>
    <tr>
        <th class="js-weight">Вес</th>
        <th colspan="2">Высота</th>
        <th colspan="2">Ширина</th>
        <th>Длина</th>
        <th class="js-weight">&nbsp;</th>
    </tr>
</thead>
<tfoot>
    <tr class="white js-weight">
        <td><a href="#" class="inline inline-link js-add-size"><i class="icon16 plus"></i> <b><i>Добавить размер</i></b></a></td>
        <td colspan="4"><span class="hint">Сохраните размеры ваших упаковок в зависимости от веса заказа. Или выберите единый фиксированный размер.</span></td>
    </tr>
</tfoot>
HTML;
        $html .= '<tbody>';
        $default_row = array(
            'weight' => 1,
            'height' => 10,
            'width'  => 20,
            'length' => 30,
        );
        $table = ifset($params['value']['table'], array($default_row));
        $params['title'] = '';

        $params['title_wrapper'] = '%s';
        $params['description'] = 'см';
        $params['control_wrapper'] = '<td>%s%s&nbsp;%s</td>';
        $params['description_wrapper'] = '%s';
        $params['size'] = 6;

        $dimensions = array('height', 'width', 'length');
        waHtmlControl::addNamespace($params, 'table');

        foreach ($table as $id => $row) {
            $html .= '<tr class="js-size">';
            $row_params = $params;
            waHtmlControl::addNamespace($row_params, $id);
            $weight_params = $row_params;
            $weight_params['description'] = 'кг';
            $weight_params['control_wrapper'] = '<td class="js-weight">%s%s&nbsp;%s</td>';
            $weight_params['title'] = '≤ ';
            $weight_params['value'] = floatval(isset($row['weight']) ? $row['weight'] : $default_row['weight']);
            $html .= waHtmlControl::getControl(waHtmlControl::INPUT, 'weight', $weight_params);
            foreach ($dimensions as $dimension) {
                $row_params['value'] = floatval(isset($row[$dimension]) ? $row[$dimension] : $default_row[$dimension]);
                $html .= waHtmlControl::getControl(waHtmlControl::INPUT, $dimension, $row_params);
                if ($dimension != 'length') {
                    $html .= '<td>×</td>';
                }
            }

            $html .= '<td class="js-weight"><a href="#" class="js-delete-size"><i class="icon16 delete"></i></a></td>';
            $html .= '</tr>';
        }
        $html .= '</tbody>';
        $html .= "</table>";

        $html .= <<<HTML
<script type="text/javascript">
    $(function () {
        'use strict';
        var radio = $(':input[type="radio"][name$="\[size\]\[type\]"]');
        var container = $('#{$params['id']}');

        container.on('click', '.js-add-size', function () {
            var el = $(this);
            var table = el.parents('table:first');
            var last = table.find('tr.js-size:last');
            var clone = last.clone();

            clone.find('input').each(function () {
                var input = $(this);

                // increase index inside input name
                var name = input.attr('name');
                input.attr('name', name.replace(/\[table]\[(\d+)]/, function (str, p1) {
                    return '[table][' + (parseInt(p1, 10) + 1) + ']';
                }));
                var value = parseFloat(input.val());
                input.val(value >= 10 ? value + 5 : (value < 2 ? value + 0.5 : value + 1));
            });

            last.after(clone);
            return false;
        });

        container.on('click', '.js-delete-size', function () {
            /**
            * @this HTMLInputElement
            */
            var el = $(this);
            var table = el.parents('table:first');
            if (table.find('tr.js-size').length > 1) {
                el.parents('tr:first').remove();
            } else {
                el.parents('tr:first').find('input').each(function () {
                    this.value = this.defaultValue;
                });
            }
            return false;
        });

        radio.change(function (event) {

            if (!event.originalEvent) {
            }
            if (this.checked) {
                var rows = container.find('tr.js-size');
                var scope = container.find('.js-weight');
                switch (this.value) {
                    case 'fixed':
                        if(rows.length>1){
                            rows.filter(':not(:first)').hide();
                        }
                        scope.hide();
                        break;
                    case 'table':
                        scope.show();
                        rows.show();
                        break;

                }
            }

        }).change();
    });
</script>
HTML;


        return $html;
    }

    public function settingFilterControl($name, $params = array())
    {
        $html = '';
        $html .= ifset($params['description'], '');
        $wrappers = array(
            'title'           => '',
            'title_wrapper'   => false,
            'description'     => '',
            'control_wrapper' => "%s%3\$s\n%2\$s\n",
            'value'           => '',
        );

        $params = array_merge($params, $wrappers);

        $filter_params = $params;
        $filter_params['style'] = 'display: none;';
        $filter_name = preg_replace('@([_\w]+)(\]?)$@', '$1.filter$2', $name);
        $html .= waHtmlControl::getControl(waHtmlControl::SELECT, $filter_name, $filter_params);
        waHtmlControl::makeId($filter_params, $filter_name);


        $pickup_name = preg_replace('@([_\w]+)(\]?)$@', '$1.pickup_id$2', $name);
        $params['options'] = array(
            array(
                'value'       => '-1',
                'title'       => 'title_placeholder',
                'description' => 'description_placeholder',
            ),
        );
        $radio = waHtmlControl::getControl(waHtmlControl::RADIOGROUP, $pickup_name, $params);

        $map = false;
        switch ($this->map) {
            case 'desktop':
                if (!waRequest::isMobile()) {
                    $map = true;
                }
                break;
            case 'always':
                $map = true;
                break;

        }

        $url_params = array(
            'action_id' => 'inputData',
            'plugin_id' => $this->key,
        );
        $url = json_encode(wa()->getRouteUrl(sprintf('%s/frontend/shippingPlugin', $this->app_id), $url_params, true));


        $css = file_get_contents($this->path.'/css/frontend.css');
        $html .= <<<HTML
<style>{$css}
</style>
HTML;
        if ($map) {

            $map_params = $params;
            waHtmlControl::makeId($map_params, $name, 'cart');

            $html .= <<<HTML
<section class="yandexdelivery-loading-section" style="display:none;">
    <i class="icon16 loading"></i>
</section>

<section class="yandexdelivery-map-section" style="display:none;">
    <div class="yandexdelivery-map-wrapper">
        <div class="yandexdelivery-map" id="{$map_params['id']}">
            <i class="icon16 loading"></i>
        </div>
    </div>
    <div class="yandexdelivery-aside-wrapper">
        <div class="yandexdelivery-aside">
            <ul>
                <li class="js-yandexdelivery-variant">{$radio}<input class="js-yandexdelivery-button" type="button" value="Выбрать" style="display: none;"></li>
            </ul>
        </div>
    </div>
</section>
HTML;
        } else {
            $map_params = array(
                'id' => '',
            );
        }
        $html .= <<<HTML
<section class="yandexdelivery-pickup-section" style="display: none;">
    <div class="line" style="font-weight: bold; font-size: 120%; margin-bottom: 20px;">Вы выбрали ПВЗ:</div>
    <div class="yandexdelivery-pickup-header">Name placeholder</div>
    <div class="line js-yandexdelivery-address">Address placeholder</div>
    <div class="line js-yandexdelivery-payment">Payment placeholder</div>
    <div class="line hint">Road description placeholder</div>
    <div class="line js-yandexdelivery-schedule">Schedule</div>
    <div class="line">
        <a href="javascript:void(0);" class="js-yandexdelivery-change">Изменить</a>
    </div>
</section>

HTML;
        $js_url = json_encode(wa()->getRootUrl(true, true).'wa-plugins/shipping/yandexdelivery/js/frontend.js?v='.$this->getProperties('version'));

        $html .= <<<HTML
<script type="text/javascript">
    $(function () {
        'use strict';

        function init() {
            var _instance = new ShippingYandexdelivery(
                '$this->key',
                {
                    map: '{$map_params['id']}',
                    filter: '{$filter_params['id']}'
                },
                {$url}
            );
        }

        if (typeof(ShippingYandexdelivery) === 'undefined') {
            $.getScript({$js_url}, init);
        } else {
            init();
        }

    });
</script>
HTML;


        return $html;
    }

    public function settingFilterBackendControl($name, $params = array())
    {
        $html = '';
        $html .= ifset($params['description'], '');
        $wrappers = array(
            'title'           => '',
            'title_wrapper'   => false,
            'description'     => '',
            'control_wrapper' => "%s%3\$s\n%2\$s\n",
            'value'           => '',
            'disabled'        => 'disabled',
        );

        $html .= waHtmlControl::getControl(waHtmlControl::HIDDEN, $name, $wrappers + $params);
        waHtmlControl::makeId($params, $name);

        $js_url = json_encode(wa()->getRootUrl(true, true).'wa-plugins/shipping/yandexdelivery/js/backend.js?v='.$this->getProperties('version'));

        $html .= <<<HTML
<script type="text/javascript">
    $(function () {
        'use strict';

        function init() {
            var _instance = new ShippingYandexdeliveryBackend(
                '$this->key',
                '{$params['id']}'
            );
        }

        if (typeof(ShippingYandexdeliveryBackend) === 'undefined') {
            $.getScript({$js_url}, init);
        } else {
            init();
        }

    });
</script>
HTML;

        return $html;
    }


    /**
     * @param string $name
     * @param array $params
     * @return string
     */
    public function settingDateControl($name, $params = array())
    {
        $html = '';
        $javascript = '';

        $wrappers = array(
            'title'           => '',
            'title_wrapper'   => '%s',
            'description'     => '',
            'control_wrapper' => "%s\n%3\$s\n%2\$s\n",
        );

        $params = array_merge($params, $wrappers);
        $value = ifset($params['value']);
        if (!is_array($value)) {
            $value = array();
        }
        $params['value'] = null;

        $available_days = array(1, 2, 3, 4, 5, 6, 7);
        unset($params['id']);

        $interval_params = $params;
        $interval_params['value'] = ifset($value['interval']);
        $interval_params['data'] = array(
            'value' => $interval_params['value'],
        );

        $interval_params['description'] = _ws('Time');
        $interval_params['options'] = array(
            array(
                'value' => '',
                'title' => '',
                'data'  => array('days' => $available_days),
            ),
        );

        $interval_name = preg_replace('@([_\w]+)(\]?)$@', '$1.interval$2', $name);
        waHtmlControl::makeId($interval_params, $interval_name);

        $date_params = $params;
        $date_format = waDateTime::getFormat('date');
        if (isset($params['params']['date'])) {
            $date_params['style'] = "z-index: 100000;";

            $date_name = preg_replace('@([_\w]+)(\]?)$@', '$1.date_str$2', $name);
            $offset = min(365, max(0, intval(ifset($params['params']['date'], 0))));
            $date_params['placeholder'] = waDateTime::format($date_format, sprintf('+ %d days', $offset));
            $date_params['description'] = _ws('Date');

            $date_params['value'] = ifset($value['date_str']);
            $html .= waHtmlControl::getControl(waHtmlControl::INPUT, $date_name, $date_params);
            waHtmlControl::makeId($date_params, $date_name);

            $date_name = preg_replace('@([_\w]+)(\]?)$@', '$1.date$2', $name);
            $date_formatted_params = $params;
            $date_formatted_params['style'] = "display: none;";

            $date_formatted_params['value'] = ifset($value['date']);
            $html .= waHtmlControl::getControl(waHtmlControl::INPUT, $date_name, $date_formatted_params);
            waHtmlControl::makeId($date_formatted_params, $date_name);

            $date_format_map = array(
                'PHP' => 'JavaScript',
                'Y'   => 'yy',
                'd'   => 'dd',
                'm'   => 'mm',
            );
            $js_date_format = str_replace(array_keys($date_format_map), array_values($date_format_map), $date_format);
            $locale = wa()->getLocale();
            $localization = sprintf("wa-content/js/jquery-ui/i18n/jquery.ui.datepicker-%s.js", $locale);
            if (!is_readable($localization)) {
                $localization = '';
            }


            if (empty($interval_params['id'])) {
                $interval_params['id'] = '';
            }

            $available_days = json_encode($available_days);
            $root_url = wa()->getRootUrl();


            $javascript = <<<HTML
<script type="text/javascript">
    $(function () {
        'use strict';
        var id_date = '{$date_params['id']}';
        var id_date_formatted = '{$date_formatted_params['id']}';
        var date = $('#'+id_date);
        var date_formatted = $('#'+id_date_formatted);
        var interval = '{$interval_params['id']}' ? $('#{$interval_params['id']}') : false;
        
        date.data('available_days', {$available_days});
        var init = function () {
            date.datepicker();
            date.datepicker("option", {
                "dateFormat": '{$js_date_format}',
                "minDate": {$offset},
                "onSelect": function (dateText) {
                    var d = date.datepicker('getDate');
                    date.val(dateText);
                    date_formatted.val($.datepicker.formatDate('yy-mm-dd', d));
                    if (d && interval && interval.length) {
                        var day = (d.getDay() + 6) % 7;
                        /**
                         * filter select by days
                         */
                        var value = typeof(interval.val())!=='undefined';
                        var matched = null;
                        interval.find('option').each(function () {
                            /**
                             * @this HTMLOptionElement
                             */

                            var option = $(this);
                            var disabled = (option.data('days').indexOf(day) === -1) ? 'disabled' : null;
                            option.attr('disabled', disabled);
                            if (disabled) {
                                if (this.selected) {
                                    value = false;
                                }
                            } else {
                                matched = this;
                                if (!value) {
                                    this.selected = true;
                                    value = !!this.value;
                                    if (typeof(interval.highlight) === 'function') {
                                        interval.highlight();
                                    }
                                }
                            }
                        });

                        if (value) {
                            interval.removeClass('error');
                        } else if (matched) {
                            matched.selected = true;
                            interval.removeClass('error');
                        } else {
                            interval.addClass('error');
                        }
                    }
                },
                "beforeShowDay": function (d) {
                    if (interval && interval.length) {
                        var day = ((d.getDay() + 6) % 7)+1;
                        var available_days = date.data('available_days')||[];
                        return [available_days.indexOf(day) !== -1]
                    } else {
                        return [true];
                    }
                }
            });
            $('.ui-datepicker').css({
                "zIndex": 999998,
                "display": 'none'
            });
        };

        var init_locale = function () {
            if ('{$localization}' && (!$.datepicker.regional || ($.datepicker.regional.indexOf('{$locale}'.substr(0, 2)) === -1))) {
                $.getScript('{$root_url}{$localization}', init);
            } else {
                init();
            }
        };

        if (typeof(date.datepicker) !== 'function') {
            $("<link/>", {
                rel: "stylesheet",
                type: "text/css",
                href: "{$root_url}wa-content/css/jquery-ui/jquery-ui-1.7.2.custom.css"
            }).appendTo("head");
            $.getScript('{$root_url}wa-content/js/jquery-ui/jquery-ui-1.7.2.custom.min.js', init_locale);

        } else {
            init_locale();
        }
    });
</script>
HTML;
        }

        $html .= ifset($params['control_separator']);
        unset($interval_params['id']);
        $html .= waHtmlControl::getControl(waHtmlControl::SELECT, $interval_name, $interval_params);

        $html .= $javascript;

        return $html;
    }

    private function sendJsonError($error)
    {
        $response = array(
            'status' => 'fail',
            'errors' => array($error),
        );
        $this->sendJsonResponse($response);
    }

    private function sendJsonData($data)
    {
        $response = array(
            'status' => 'ok',
            'data'   => $data,
        );
        $this->sendJsonResponse($response);
    }

    private function sendJsonResponse($response)
    {

        if (waRequest::isXMLHttpRequest()) {
            wa()->getResponse()->addHeader('Content-Type', 'application/json')->sendHeaders();
        }
        $options = 0;
        $option_names = array(
            'JSON_PRETTY_PRINT',
            'JSON_UNESCAPED_UNICODE',
        );
        foreach ($option_names as $option_name) {
            if (defined($option_name)) {
                $options = $options | constant($option_name);
            }
        }
        echo json_encode($response, $options);
        exit;
    }

    private function getMethodKey($method)
    {
        $keys = @json_decode($this->method_keys, true);

        if (!$keys || !is_array($keys)) {
            $keys = array();
            foreach (preg_split('@[\r\n,]+@', trim($this->method_keys, ' {[]}')) as $string) {
                if (preg_match('@([\'"]?)\b(\w+)\b\1:\s*([\'"]?)\b([0-9a-f]+)\b\3@', $string, $matches)) {
                    $keys[$matches[2]] = $matches[4];
                }
            }
        }
        if (!isset($keys[$method]) || !strlen($keys[$method])) {
            throw new waException(sprintf("Not found key for method %s. Check plugin settings field 'method_keys'.", $method));
        }
        return $keys[$method];
    }

    private function format($data)
    {
        if (is_array($data)) {
            ksort($data);
            foreach ($data as $key => $value) {
                if ($value === null) {
                    unset($data[$key]);
                } else {
                    $data[$key] = $this->format($value);
                }
            }

        } else {
            $data = (string)$data;
        }
        return $data;
    }

    private function implode($data)
    {
        if (!is_array($data)) {
            return $data;
        }
        ksort($data);
        return implode('', array_map(array($this, 'implode'), $data));
    }

    private $api_error = array();

    private function apiQuery($method, $data = array())
    {
        $this->api_error = array();
        $data += array(
            'client_id' => $this->client_id,
            'sender_id' => $this->sender_id,
        );

        $data = $this->format($data);

        $url = sprintf($this->url, $this->api_version, $method);
        $key = md5($url.var_export($data, true));
        $methods = array(
            'searchDeliveryList',
            'autocomplete',
        );
        if (in_array($method, $methods)) {
            $cache = new waVarExportCache($this->getCacheKey($key), 3600, 'webasyst');
            if ($cache->isCached()) {
                return $cache->get();
            }
        }
        try {
            $data['secret_key'] = md5($this->implode($data).$this->getMethodKey($method));

            $options = array(
                'request_format' => 'default',
                'format'         => waNet::FORMAT_JSON,
                'verify'         => false,
            );

            $net = new waNet($options);

            $response = $net->query($url, $data, waNet::METHOD_POST);
            if ($response['status'] != 'ok') {
                $this->api_error = $response['data'];
                throw new waException($response['error']);
            } elseif (!empty($cache)) {
                $cache->set($response['data']);
            }

            if ($this->debug) {
                $debug = var_export(compact('url', 'data', 'response'), true);
                waLog::log($debug, 'wa-plugins/shipping/yandexdelivery/api.debug.log');
            }

        } catch (waException $ex) {
            $message = $ex->getMessage();
            unset($data['secret_key']);

            $debug = var_export(compact('url', 'data', 'response'), true);
            waLog::log($message."\n".$debug, 'wa-plugins/shipping/yandexdelivery/api.error.log');
            throw $ex;
        }

        return $response['data'];
    }

    private function getAssessedPrice($string)
    {
        $cost = 0.0;

        $string = preg_replace('@\\s+@', '', $string);

        foreach (preg_split('@\+|(\-)@', $string, null, PREG_SPLIT_OFFSET_CAPTURE | PREG_SPLIT_NO_EMPTY) as $chunk) {
            $value = str_replace(',', '.', trim($chunk[0]));
            if (strpos($value, '%')) {

                $price = array(
                    $this->getTotalRawPrice(),
                    $this->getTotalPrice(),
                );

                $value = round(max($price) * floatval($value) / 100.0, 2);
            } else {
                $value = floatval($value);
            }
            if ($chunk[1] && (substr($string, $chunk[1] - 1, 1) == '-')) {
                $cost -= $value;
            } else {
                $cost += $value;
            }
        }
        return round(max(0.0, $cost), 2);
    }

    public function integrationOptions()
    {
        return array(
            array(
                'value'       => self::STATE_DRAFT,
                'title'       => 'Создавать и обновлять черновики заказов',
                'description' => '<br>Для каждого заказа в приложении (например, для всех новых заказов в Shop-Script) создается черновик заказа в кабинете «Яндекс.Доставки». Этот черновик автоматически обновляется после редактирования заказа в приложении.<br>',
                'disabled'    => !$this->getAdapter()->getAppProperties(self::STATE_DRAFT),
            ),
            array(
                'value'       => self::STATE_READY,
                'title'       => 'Создавать отгрузки',
                'description' => '<br>После окончательного формирования заказа в приложении (например, после выполнения действия «Отправлен» в Shop-Script) черновик в кабинете «Яндекс.Доставки» превращается в сформированный заказ, ожидающий отгрузку.<br>
Заявками на отгрузку и печатью ярлыков управляйте в кабинете «Яндекс.Доставки». Например, в одной заявке можно объединить несколько заказов.<br>',
                'disabled'    => !$this->getAdapter()->getAppProperties(self::STATE_READY),
            ),
            array(
                'value'       => self::STATE_CANCELED,
                'title'       => 'Отменять отгрузки',
                'description' => '<br>Когда вы отменяете заказ в приложении (например, с помощью действия «Удалить» в Shop-Script), отменяется заказ в кабинете «Яндекс.Доставки»:<br>
&nbsp;&nbsp;&nbsp;&nbsp;- заказ, ожидавший отгрузку, переносится в список «Отмены» в кабинете «Яндекс.Доставки»;<br>
&nbsp;&nbsp;&nbsp;&nbsp;- черновик не удаляется и остается без изменений, его можно вручную отредактировать или отправить в архив.',
                'disabled'    => !$this->getAdapter()->getAppProperties(self::STATE_CANCELED),
            ),
        );
    }

    public function taxesOptions()
    {
        return array(
            array(
                'value' => 'skip',
                'title' => 'Не передавать ставки НДС',

            ),
            array(
                'value'    => 'no',
                'title'    => 'НДС не облагается',
                'disabled' => !$this->getAdapter()->getAppProperties('taxes'),
            ),
            array(
                'value'    => 'map',
                'title'    => 'Передавать ставки НДС по каждой позиции',
                'disabled' => !$this->getAdapter()->getAppProperties('taxes'),
            ),
        );
    }
}
