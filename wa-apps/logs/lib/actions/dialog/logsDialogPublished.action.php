<?php

class logsDialogPublishedAction extends waViewAction
{
    public function execute()
    {
        $path = waRequest::get('path');
        $model = new logsPublishedModel();

        $routing_exists = !!wa()->getRouting()->getByApp('logs');
        $access_rights = $this->getRights('publish_files');
        $this->view->assign(compact('routing_exists', 'access_rights'));

        if ($routing_exists) {
            $file_data = $model->getByField(array(
                'path' => $path,
            ));
            $published = !empty($file_data);
            $url = $published ? wa()->getRouteUrl('logs/frontend/downloadFile', $file_data, true) : '';
            $this->view->assign(compact('path', 'published', 'url'));
        } else {
            $site_url = wa()->getAppUrl('site').'#/routing/';
            $this->view->assign(compact('site_url'));
        }
    }
}
