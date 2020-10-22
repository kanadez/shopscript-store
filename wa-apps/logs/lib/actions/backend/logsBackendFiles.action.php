<?php

class logsBackendFilesAction extends logsViewAction
{
    public function execute()
    {
        $mode = waRequest::get('mode');
        $method = 'getFilesBy'.ucfirst($mode);
        if (method_exists('logsHelper', $method)) {
            $this->view->assign(array(
                'items'  => logsHelper::$method()
            ));
        } else {
            $this->redirect(wa()->getAppUrl());
        }
    }
}
