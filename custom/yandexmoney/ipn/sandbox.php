<?php

require_once dirname(__FILE__)."/DB.php";

$db = new DB;

if (!$db->mysqlConnect()){
   mysql_query("SET NAMES 'utf8'");
   mysql_query("SET collation_connection = 'UTF-8_general_ci'");
   mysql_query("SET collation_server = 'UTF-8_general_ci'");
   mysql_query("SET character_set_client = 'UTF-8'");
   mysql_query("SET character_set_connection = 'UTF-8'");
   mysql_query("SET character_set_results = 'UTF-8'");
   mysql_query("SET character_set_server = 'UTF-8'");
}

//setOrderPaid(121);
sendOrderPaidEmail(136);
//echo getOrderCode(150);

function setOrderPaid($order_id){
    global $db;
    
    $new_order_state_id = "new";
    $paid_order_state_id = "paid";
    $current_datetime = date('Y-m-d H:i:s a', time());
    $current_year = date('Y', time());
    $current_quarter = floor((date('n', time()) - 1) / 3) + 1;
    $current_month = date('n', time());
    $current_date = date('Y-m-d', time());
    
    klog("\nsetOrderPaid()", "time: ".$current_datetime);
    $query = sprintf("SELECT state_id, contact_id FROM shop_order WHERE id = %d", $order_id);
    $response = $db->db_fetchone_array($query);
    
    if (isset($order_id) && count($response) > 0){
        $order_state_id = $response["state_id"];
        $contact_id = $response["contact_id"];

        if ($order_state_id != $paid_order_state_id){
            $update_query = sprintf("UPDATE shop_order SET "
                    . "update_datetime = '%s', "
                    . "state_id = '%s', "
                    . "paid_year = %d, "
                    . "paid_quarter = %d, "
                    . "paid_month = %d, "
                    . "paid_date = '%s' "
                    . "WHERE id = %d", 
                    $current_datetime,
                    $paid_order_state_id,
                    $current_year,
                    $current_quarter,
                    $current_month,
                    $current_date,
                    $order_id);
            $update_response = $db->db_query($update_query, __LINE__, __FILE__);

            waLog($order_id, $contact_id, "pay", "new", "paid");
            klog("setOrderPaid()", "setting paid order ".$order_id.", response: ".$update_response);
        }
        else{
            klog("setOrderPaid()", "already paid, order ".$order_id);
        }
    }
    else{
        klog("setOrderPaid()", "failed, empty order or wrong order_id");
    }
}

mysql_close();

function waLog($order_id, $contact_id, $action_id, $before_state_id, $after_state_id){
    global $db;
    
    $current_datetime = date('Y-m-d H:i:s a', time());
    $update_query = sprintf("INSERT INTO shop_order_log ("
        . "order_id, "
        . "contact_id, "
        . "action_id, "
        . "datetime, "
        . "before_state_id, "
        . "after_state_id, "
        . "text) VALUES ("
        . "%d, "
        . "%d, "
        . "'%s', "
        . "'%s', "
        . "'new', "
        . "'paid', "
        . "'')",
        $order_id,
        $contact_id, 
        $action_id, 
        $current_datetime, 
        $before_state_id, 
        $after_state_id
    );
    $db->db_query($update_query, __LINE__, __FILE__);
}

function sendOrderPaidEmail($order_id){
    $shop_settings = getShopSettings();
    $shop_email = $shop_settings["email"];
    $shop_phone = $shop_settings["phone"];
    $shop_name = $shop_settings["name"];
    $shop_url = $shop_settings["url"];
    $order_format = $shop_settings["order_format"];
    
    $order = getOrder($order_id, $order_format);
    
    if (isset($order)){
        $order_create_datetime = parseDate($order["create_datetime"]);
        $order_status = parseState($order["state_id"]);
        $order_id_formatted = $order["id"];
        $order_contact_emails = getOrderEmails($order["contact_id"]);
        $is_order_digital = isOrderDigital($order_id);
        $order_auth_code = getOrderCode($order_id);
        $order_auth_pin = getOrderPin($order_id);
        $digital_order_download_link = $shop_url."shop/my/order/".$order_id."/".$order_auth_code."/";
        $order_params = array(
            "currency" => $shop_settings["currency"],
            "shipping" => $order["shipping"],
            "discount" => $order["discount"],
            "tax" => $order["tax"],
            "total" => $order["total"]
        );
        
        $order_items = getOrderItems($order_id, $order_params);

        $template = '
            <table cellspacing="0" border="0" cellpadding="0" width="100%" bgcolor="#eeeeee" style="
                font-family:Helvetica,Arial,sans-serif;
                letter-spacing:normal;
                text-indent:0;
                text-transform:none;
                word-spacing:0;
                background-color:rgb(232,232,232);
                border-collapse:collapse
            ">
                <tr>
                    <td style="padding: 20px;">
                        <table width="600" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#ffffff" style="
                            width: 600px !important;
                            background-color:#fff;
                            border:1px solid #cccccc;
                            border-radius: 4px;
                            margin:auto;
                            overflow: hidden;
                            ">

                            <!-- HEADER -->
                            <tr>
                                <td width="50" style="width:50px !important; border: solid #dddddd; border-width: 0 0 1px 0;"></td>
                                <td colspan="2" height="70" align="center" valign="middle" style="border: solid #dddddd; border-width: 0 0 1px 0;">
                                    <table width="500" border="0" align="center" cellpadding="0" cellspacing="0" style="width: 100% !important;">
                                        <tr>
                                            <td>
                                                <font style="font-weight: bold; font-size: 20px; margin: 0 12px 0 0;"><b>'.$order_id_formatted.'</b></font>
                                                <font style="color: #888">'.$order_create_datetime.'</font>
                                            </td>
                                            <td  style="text-align: right;">
                                                <font>'.$order_status.'</font>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <td width="50" style="width:50px !important; border: solid #dddddd; border-width: 0 0 1px 0;"></td>
                            </tr>

                            <!-- STATUS -->
                            <tr>
                                <td></td>
                                <td>
                                    <table cellspacing="0" border="0" cellpadding="0" width="100%" style="border-collapse:collapse">
                                        <tr>
                                            <td>
                                                
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <td></td>
                            </tr>

                            <!-- TEXT -->
                            <tr>
                                <td bgcolor="#ffffcc"></td>
                                <td bgcolor="#ffffcc" style="padding: 12px 0 12px 0;">
                                    <p>Здравствуйте!</p>
                                    <p>Ваш заказ '.$order_id_formatted.' был только что оплачен.</p>
                                    '.($is_order_digital ? 
                                        '<p><a style="
                                                text-decoration: none;
                                                font-style: normal;
                                                font-variant: normal;
                                                font-weight: normal;
                                                font-size: 17px;
                                                line-height: 40px;
                                                font-family: Helvetica,Arial,sans-serif;
                                                color: white;
                                                display: inline-block;
                                                width: 150px;
                                                text-align: center;
                                                background: rgba(0,153,0,0.51);
                                                border-radius: 4px;" 
                                            href="'.$digital_order_download_link.'" target="_blank">Скачать товар</a>'
                                        . ' (нажмите и введите PIN: '.$order_auth_pin.')</p>' 
                                        : 
                                        '')
                                    .'
                                </td>
                                <td bgcolor="#ffffcc" colspan="2"></td>
                            </tr">
                            <tr>
                                <td></td>
                                <td style="padding: 12px 0 12px 0;">
                                </td>
                                <td colspan="2"></td>
                            </tr">
                            '.$order_items.'
                            <!-- TEXT -->
                            <tr>
                                <td colspan="3">
                                    <p style="
                                        color:rgb(48,48,48);
                                        font-style:normal;
                                        font-variant:normal;
                                        font-weight:normal;
                                        font-size:14px;
                                        line-height:16px;
                                        font-family:Helvetica,Arial,sans-serif;
                                        margin: 20px 0 0;
                                        text-align:center;
                                        ">Спасибо за покупку в магазине «'.$shop_name.'»!</p>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td style="padding: 24px 0 36px 0;">
                                    <h3 style="margin: 0;">Контактная информация</h3>'.
                                    (isset($shop_email) ?
                                        '<p style="margin: 10px 0 0;">
                                            Email: <a href="mailto:'.$shop_email.'">'.$shop_email.'</a>
                                        </p>' 
                                        :
                                        ''
                                    ).
                                    (isset($shop_phone) ?
                                        '<p style="margin: 10px 0 0;">
                                            Телефон: '.$shop_phone.'
                                        </p>' 
                                        :
                                        ''
                                    ).
                                '</td>
                                <td></td>
                            </tr>
                        </table>

                        <!-- BOTTOM SITE INFORMATION -->
                        <table width="100%" border="0" cellspacing="0" cellpadding="0" style="border-collapse:collapse">
                            <tr>
                                <td valign="middle" align="center" height="45">
                                    <p style="
                                    font-style:normal;
                                    font-variant:normal;
                                    font-weight:normal;
                                    font-size:13px;
                                    line-height:16px;
                                    font-family:Arial,sans-serif,Helvetica;
                                    color:rgb(147,154,164);
                                    margin: 20px 0 0;
                                    ">
                                        © '.date("Y").' '.$shop_name.'<br>
                                        <a href="'.$shop_url.'" target="_blank">'.$shop_url.'</a>
                                    </p>
                                </td>
                            </tr>
                        </table>

                    </td>
                </tr>
            </table>';

        $subject = "Заказ ".$order_id_formatted." оплачен";
        $message = $template;
        
        if (count($order_contact_emails) > 0){
            foreach ($order_contact_emails as $recepient) {
                sendMail($shop_email, $shop_name, $recepient["email"], $subject, $message);
            }
        }
    }
    else{
        $error_template = '
            <table cellspacing="0" border="0" cellpadding="0" width="100%" bgcolor="#eeeeee" style="
                font-family:Helvetica,Arial,sans-serif;
                letter-spacing:normal;
                text-indent:0;
                text-transform:none;
                word-spacing:0;
                background-color:rgb(232,232,232);
                border-collapse:collapse
            ">
                <tr>
                    <td style="padding: 20px;">
                        <table width="600" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#ffffff" style="
                            width: 600px !important;
                            background-color:#fff;
                            border:1px solid #cccccc;
                            border-radius: 4px;
                            margin:auto;
                            overflow: hidden;
                            background-color: mistyrose;
                            ">

                            <tr>
                                <td width="50" style="border: solid #dddddd; border-width: 0 0 1px 0;"></td>
                                <td height="70" align="center" valign="middle" style="border: solid #dddddd; border-width: 0 0 1px 0;">
                                    <table width="500" border="0" align="center" cellpadding="0" cellspacing="0" style="width: 100% !important;">
                                        <tr>
                                            <td>
                                            </td>
                                            <td style="text-align: center;padding:20px;">
                                            Что-то пошло не так во время оплаты. 
                                            <br>Приносим извинения за неудобства.
                                            <h3>Сообщите нам об ошибке:</h3>'.
                                            (isset($shop_email) ?
                                                '<p style="margin: 0;">
                                                    Email: <a href="mailto:'.$shop_email.'">'.$shop_email.'</a>
                                                </p>' 
                                                :
                                                ''
                                            ).
                                            (isset($shop_phone) ?
                                                '<p style="margin: 10px 0 0;">
                                                    Телефон: '.$shop_phone.'
                                                </p>' 
                                                :
                                                ''
                                            ).'
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <td width="50" style="width:50px !important; border: solid #dddddd; border-width: 0 0 1px 0;"></td>
                            </tr>                            
                        </table>

                        <!-- BOTTOM SITE INFORMATION -->
                        <table width="100%" border="0" cellspacing="0" cellpadding="0" style="border-collapse:collapse">
                            <tr>
                                <td valign="middle" align="center" height="45">
                                    <p style="
                                    font-style:normal;
                                    font-variant:normal;
                                    font-weight:normal;
                                    font-size:13px;
                                    line-height:16px;
                                    font-family:Arial,sans-serif,Helvetica;
                                    color:rgb(147,154,164);
                                    margin: 20px 0 0;
                                    ">
                                        © '.date("Y").' '.$shop_name.'<br>
                                        <a href="'.$shop_url.'" target="_blank">'.$shop_url.'</a>
                                    </p>
                                </td>
                            </tr>
                        </table>

                    </td>
                </tr>
            </table>';

        echo $error_template;
    }
}

function getOrderEmails($contact_id){
    global $db;
    
    $query = sprintf("SELECT email FROM wa_contact_emails WHERE contact_id = %d", $contact_id);
    $response = $db->db_fetchall_array($query);
    
    return $response;
}

function sendMail($sender, $sender_name, $recepient, $subject, $message){
    $header = "From: $sender_name <$sender>\r\n"; 
    $header.= "MIME-Version: 1.0\r\n"; 
    $header.= "Content-Type: text/html; charset=utf-8\r\n"; 
    $header.= "X-Priority: 1\r\n"; 
    
    $send_result = mail($recepient, $subject, $message, $header);
    
    return  $send_result;
}

function getOrder($order_id, $order_format){
    global $db;
    
    $response = null;
    
    $query = sprintf("SELECT * FROM shop_order WHERE id = %d", $order_id);
    $query_response = $db->db_fetchone_array($query);
    
    if (count($query_response) > 0){
        $response = $query_response;
        
        $order_id_formatted = str_replace('{$order.id}', $order_id, $order_format);
        $response["id"] = $order_id_formatted;
    }
    
    return $response;
}

function getOrderItems($order_id, $order_params){
    global $db;
    
    $response = "";
    $query = sprintf("SELECT * FROM shop_order_items WHERE order_id = %d", $order_id);
    $query_response = $db->db_fetchall_array($query);
    
    if (count($query_response) > 0){
        foreach ($query_response as $item){
            $response .= "<tr>";
            $response .= "<td></td>";
            $response .= "<td>";
            $response .= $item["name"];
            $response .= "</td>";
            $response .= "<td width='20%'>";
            $response .= floor($item["price"])." ".$order_params["currency"]." x ".$item["quantity"];
            $response .= "</td>";
            $response .= "<td width='10%'></td>";
            $response .= "</tr>";
        }

        if ($order_params["shipping"] > 0){
            $response .= "<tr>";
            $response .= "<td></td>";
            $response .= "<td>";
            $response .= "Доставка";
            $response .= "</td>";
            $response .= "<td>";
            $response .= floor($order_params["shipping"])." ".$order_params["currency"];
            $response .= "</td>";
            $response .= "</tr>";        
        }

        if ($order_params["tax"] > 0){
            $response .= "<tr>";
            $response .= "<td></td>";
            $response .= "<td>";
            $response .= "Налоги";
            $response .= "</td>";
            $response .= "<td>";
            $response .= floor($order_params["tax"])." ".$order_params["currency"];
            $response .= "</td>";
            $response .= "</tr>";        
        }

        if ($order_params["discount"] > 0){
            $response .= "<tr>";
            $response .= "<td></td>";
            $response .= "<td>";
            $response .= "Скидка";
            $response .= "</td>";
            $response .= "<td>";
            $response .= floor($order_params["discount"])." ".$order_params["currency"];
            $response .= "</td>";
            $response .= "</tr>";        
        }

        $response .= "<tr>";
        $response .= "<td></td>";
        $response .= "<td>";
        $response .= "<b>Итог</b>";
        $response .= "</td>";
        $response .= "<td>";
        $response .= "<b>".floor($order_params["total"])." ".$order_params["currency"]."</b>";
        $response .= "</td>";
        $response .= "</tr>";
    }
    
    return $response;
}

function getShopSettings(){
    global $db;
    
    $query = "SELECT name, value FROM wa_app_settings WHERE app_id = 'shop' OR app_id = 'webasyst' ";
    $query_response = $db->db_fetchall_array($query);
    $needles = array("email", "phone", "name", "order_format", "url", "currency");
    $response = array();
    
    foreach ($query_response as $setting){
        if (array_search($setting["name"], $needles) !== FALSE){
            $response[$setting["name"]] = $setting["value"];
        }
    }
    
    return $response;
}

function parseState($state_id){
    $needle = array(
        "new" => "Новый",
        "paid" => "Оплачено"
    );
    
    $response = "";
    
    foreach ($needle as $key => $value){
        if ($key == $state_id){
            $response = $value;
        }
    }
    
    return $response;
}

function parseDate($date){
    setlocale(LC_TIME, "ru_RU");
    $response = "";
    
    if (isset($date)){
        $timestamp = strtotime($date);
        $response = strftime("%e.%m.%G", $timestamp);
    }
    
    return $response;
}

function getOrderCode($order_id){
    global $db;
    
    $query = sprintf("SELECT value FROM shop_order_params WHERE order_id = %d AND name = 'auth_code';", $order_id);
    $query_response = $db->db_fetchone_array($query);
    $order_auth_code = $query_response["value"];
    
    return $order_auth_code;
}

function getOrderPin($order_id){
    global $db;
    
    $query = sprintf("SELECT value FROM shop_order_params WHERE order_id = %d AND name = 'auth_pin';", $order_id);
    $query_response = $db->db_fetchone_array($query);
    $order_auth_code = $query_response["value"];
    
    return $order_auth_code;
}

function isOrderDigital($order_id){
    global $db;
    
    $digital_product_type_id = 1;
    $response = FALSE;
    
    $query = sprintf("SELECT * FROM shop_order_items WHERE order_id = %d", $order_id);
    $query_response = $db->db_fetchall_array($query);
    
    foreach ($query_response as $item) {
        $product_id = $item["product_id"];
        
        $product_query = sprintf("SELECT type_id FROM shop_product WHERE id = %d", $product_id);
        $product_query_response = $db->db_fetchone_array($product_query);
        $type_id = $product_query_response["type_id"];
        
        if ($type_id == $digital_product_type_id){
            $response = TRUE;
        }
    }
    
    return $response;
}

function klog($tag, $message){
    $logfile = "log.txt";
    
    if (($handle = fopen($logfile, "a")) !== FALSE){
        fwrite($handle, $tag.": ".$message."\n");
        fclose($handle);
    }
}