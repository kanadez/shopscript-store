<?php

class logsBackendLayout extends waLayout
{
    public function execute()
    {
        $this->executeAction('navigation', new logsBackendNavigationAction());
        $loc = array(
            'cancel',
            'Delete',
            'Delete file',
            'OK',
            'Settings',
            'nothing received',
            'Save',
            'Function <tt>phpinfo()</tt> is not available on your server.',
            'Close',
            'Cannot show PHP configuration',
            'Share link',
        );
        $loc = array_flip($loc);
        foreach ($loc as $key => &$string) {
            $string = _w($key);
        }
        unset($string);
        $this->view->assign(array(
            'action' => waRequest::get('action'),
            'loc'    => $loc,
            'ajax'   => waRequest::isXMLHttpRequest(),
        ));
    }
}
