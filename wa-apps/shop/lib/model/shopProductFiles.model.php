<?php
class shopProductFilesModel extends waModel
{
    protected $table = 'shop_product_files';

    /**
     * badge types constants
     * @see self::isSystemBadgeType
     * @see self::isCustomBadgeType
     */
    const BADGE_TYPE_NEW = 0;
    const BADGE_TYPE_BESTSELLER = 1;
    const BADGE_TYPE_BESTPRICE = 2;
    const BADGE_TYPE_CUSTOM = 100;

    public function getFiles($product_id, $key = 'id', $absolute = false){
        if (empty($product_id)) {
            return array();
        }

        if ($key != 'product_id') {
            $key = 'id';
        }

        $where = $this->getWhereByField('product_id', $product_id);
        $images = array();
        
        foreach ($this->query("SELECT * FROM {$this->table} WHERE $where ORDER BY product_id, sort") as $key => $image) {
            $image['edit_datetime_ts'] = $image['edit_datetime'] ? strtotime($image['edit_datetime']) : null;
            $image['url'] = shopFile::getUrl($image, $absolute);
            
            $images[$image['id']] = $image;            
        }
        return $images;
    }

    public function countImages($product_ids)
    {
        if (empty($product_ids)) {
            return array();
        }
        $product_ids = (array) $product_ids;
        $sql = "SELECT product_id, count(*)
                FROM {$this->table}
                WHERE product_id IN (?)
                GROUP BY product_id";
        return $this->query($sql, array($product_ids))->fetchAll('product_id', true) + array_fill_keys($product_ids, 0);
    }

    public function move($id, $before_id = null){
        $image = $this->getById($id);
        
        if (empty($image)) {
            return false;
        }
        
        $product_id = $image['product_id'];
        
        if (!$before_id) {
            $sort = $this->query("SELECT MAX(sort) AS sort FROM {$this->table} WHERE product_id = $product_id")->fetchField('sort') + 1;
        } 
        else{
            $before = $this->getById($before_id);
            
            if (empty($before_id)) {
                return false;
            }
            
            $sort = $before['sort'];
            $this->query("UPDATE {$this->table} SET sort = sort + 1 WHERE product_id = $product_id AND sort >= $sort");
        }
        
        if (!$this->updateById($id, array('sort' => $sort))) {
            return false;
        }

        return true;
    }

    public function add($data, $is_default = false){
        $product_id = 0;
        
        if (isset($data['product_id'])){
            $product_id = (int)$data['product_id'];
        }
        
        if (!$product_id){
            return false;
        }
        
        $info = $this->select('MAX(`sort`)+1 AS `max`, COUNT(1) AS `cnt`')->where($this->getWhereByField('product_id', $product_id))->fetch();
        $data['sort'] = $info['cnt'] ? $info['max'] : 0;
        $image_id = $this->insert($data);
        
        return $image_id;
    }

    /**
     * Delete one image
     * @param int $id ID of image
     */
    public function delete($id){
        $id = (int)$id;
        
        if (!$id) {
            return false;
        }
        
        $image = $this->getById($id);
        
        if (!$image) {
            return false;
        }

        // first of all try delete files from disk
        waFiles::delete(shopFile::getPath($image));
        
        if (!$this->deleteById($id)) {
            return false;
        }
        
        return true;
    }

    public function deleteByProducts(array $product_ids, $hard = false){
        return FALSE;
        
        if ($hard){
            foreach ($product_ids as $product_id){
                waFiles::delete(shopProduct::getPath($product_id, 'images', false));
                waFiles::delete(shopProduct::getPath($product_id, 'images', true));
            }
        }
        $this->deleteByField('product_id', $product_ids);
    }

    public static function isSystemBadgeType($type)
    {
        return $type < self::BADGE_TYPE_CUSTOM;
    }

    public static function isCustomBadgeType($type)
    {
        return !self::isSystemBadgeType($type);
    }

    public static function getBadgeCode($type)
    {
        if ($type == self::BADGE_TYPE_NEW) {
            return '<div class="badge new"><span>'._w('New!').'</span></div>';
        } else if ($type == self::BADGE_TYPE_BESTSELLER) {
            return '<div class="badge bestseller"><span>'._w('Bestseller!').'</span></div>';
        } else if ($type == self::BADGE_TYPE_BESTPRICE) {
            return '<div class="badge low-price"><span>'._w('Low price!').'</span></div>';
        } else {
            return '<div class="badge" style="background-color: #a1fcff;"><span>'._w('YOUR TEXT').'</span></div>';
        }
    }

    public function countAvailableImages()
    {
        if (wa()->getUser()->getRights('shop', 'type.all')) {
            $sql = "SELECT COUNT(id) FROM `{$this->table}`";
        } else {
            $type_model = new shopTypeModel();
            $types = $type_model->getTypes();
            if (!$types) {
                return false;
            }
            $sql = "SELECT COUNT(i.id) FROM `{$this->table}` i
                JOIN `shop_products` p ON p.id = i.product_id
                WHERE p.type IN(".array_keys($types).")";
        }
        return $this->query($sql)->fetchField();
    }

    public function getAvailableImages($offset = 0, $limit = null)
    {
        if (!$limit) {
            $limit = (int) $offset;
            $offset = 0;
        } else {
            $offset = (int) $offset;
            $limit = (int) $limit;
        }
        if (wa()->getUser()->getRights('shop', 'type.all')) {
            $sql = "SELECT * FROM `{$this->table}` ORDER BY product_id, id LIMIT {$offset}, {$limit}";
        } else {
            $type_model = new shopTypeModel();
            $types = $type_model->getTypes();
            if (!$types) {
                return array();
            }
            $sql = "SELECT i.* FROM `{$this->table}` i
                JOIN `shop_products` p ON p.id = i.product_id
                WHERE p.type_id IN (".array_keys($types).")
                ORDER BY i.product_id, i.id
                LIMIT {$offset}, {$limit}";
        }
        return $this->query($sql)->fetchAll('id');
    }
}
