<?php

class logsBackendDirectoryAction extends logsViewAction
{
    public function execute()
    {
        $this->view->assign('items', logsHelper::getDirectory(waRequest::get('path')));
    }
}
