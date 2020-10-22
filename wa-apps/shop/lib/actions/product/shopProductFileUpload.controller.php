<?php

class shopProductFileUploadController extends shopUploadController{
    private $model;

    protected function save(waRequestFile $file){
        $product_id = waRequest::post('product_id', null, waRequest::TYPE_INT);
        $product_model = new shopProductModel();
        
        if (!$product_model->checkRights($product_id)){
            throw new waException(_w("Access denied"));
        }

        // check file
        if (!($image = $file->uploaded())){
            throw new waException('Incorrect file');
        }

        $image_changed = false;
        $event = wa()->event('image_upload', $image);
        
        if ($event) {
            foreach ($event as $plugin_id => $result){
                if ($result) {
                    $image_changed = true;
                }
            }
        }

        if (!$this->model) {
            $this->model = new shopProductFilesModel();
        }
        
        $product = new shopProduct($product_id);
        $product_name = $product->getData("name");
        $filename = basename($product_name, '.' . $file->extension);
        
        if (!preg_match('//u', $filename)) {
            $tmp_name = @iconv('windows-1251', 'utf-8//ignore', $filename);
            if ($tmp_name) {
                $filename = $tmp_name;
            }
        }
        
        $filename = preg_replace('/\s+/u', '_', $filename);
        
        if ($filename) {
            foreach (waLocale::getAll() as $l) {
                $filename = waLocale::transliterate($filename, $l);
            }
        }
        
        $filename = preg_replace('/[^a-zA-Z0-9_\.-]+/', '', $filename);
        
        if (!strlen(str_replace('_', '', $filename))) {
            $filename = '';
        }
        
        if (strlen($filename) > 20){
            $filename = substr($filename, 0, 20);
        }
        
        $product_images = $this->model->getByField("product_id", $product_id, true);
        $product_images_new_count = sizeof($product_images)+1;
        $filename_with_counter = $product_images_new_count > 1 ? $filename."-".$product_images_new_count : $filename;
        $filename = $filename_with_counter;
        
        foreach ($product_images as $image){
            if ($image["filename"] == $filename){
                $filename .= "-1";
            }
        }

        $data = array(
            'product_id'        => $product_id,
            'upload_datetime'   => date('Y-m-d H:i:s'),
            'width'             => $image->width,
            'height'            => $image->height,
            'size'              => $file->size,
            'filename'          => $filename,
            'original_filename' => basename($file->name),
            'ext'               => $file->extension,
        );
        $image_id = $data['id'] = $this->model->add($data);

        if (!$image_id) {
            throw new waException("Database error");
        }

        $config = $this->getConfig();
        $image_path = shopFile::getPath($data);
        
        if ((file_exists($image_path) && !is_writable($image_path)) || (!file_exists($image_path) && !waFiles::create($image_path))) {
            $this->model->deleteById($image_id);
            
            throw new waException(
                sprintf("The insufficient file write permissions for the %s folder.",
                    substr($image_path, strlen($config->getRootPath()))
            ));
        }

        $file->moveTo($image_path);
        unset($image);

        return array(
            'id'                => $image_id,
            'name'              => $file->name,
            'type'              => $file->type,
            'size'              => $file->size,
            'filename'          => $filename,
            'original_filename' => basename($file->name),
            'url'               => shopFile::getUrl($data),
            'description'       => ''
        );
    }
}
