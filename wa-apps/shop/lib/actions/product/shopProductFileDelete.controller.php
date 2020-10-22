<?php

class shopProductFileDeleteController extends waJsonController{
    public function execute(){
        $id = waRequest::get('id', null, waRequest::TYPE_INT);
        
        if (!$id) {
            throw new waException(_w("Unknown image"));
        }

        $product_files_model = new shopProductFilesModel();
        $image = $product_files_model->getById($id);
        
        if (!$image) {
            throw new waException(_w("Unknown image"));
        }

        $product_model = new shopProductModel();
        
        if (!$product_model->checkRights($image['product_id'])) {
            throw new waException(_w("Access denied"));
        }

        if (!$product_files_model->delete($id)) {
            throw new waException(_w("Coudn't delete image"));
        }
        
        $this->response['id'] = $id;
    }
}