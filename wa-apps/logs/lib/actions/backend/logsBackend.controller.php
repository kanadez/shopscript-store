<?php

class logsBackendController extends waViewController
{
    public function execute()
    {
        if (!waRequest::get() && strpos(waRequest::server('HTTP_REFERER'), logsHelper::getLogsBackendUrl()) !== 0) {
            //on first app access, show files sorted by update time
            $this->redirect('?action=files&mode=updatetime');
        } else {
            //otherwise default view mode is root log directory
            $this->executeAction(new logsBackendDirectoryAction());
        }
    }
}
