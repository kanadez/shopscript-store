<?php

class logsBackendNavigationAction extends logsViewAction
{
    public function execute()
    {
        if ($path = waRequest::get('path')) {
            $this->view->assign(array(
                'breadcrumbs' => logsHelper::getBreadcrumbs($path),
            ));
            if (waRequest::get('action') == 'file') {
                $logs_backend_url = logsHelper::getLogsBackendUrl(false);
                $this->view->assign(array(
                    'back'     => strpos(waRequest::cookie('back_url'), $logs_backend_url) === 0,
                    'back_url' => waRequest::cookie('back_url', $logs_backend_url),
                ));
            }
        } else {
            $action = waRequest::get('action');
            $mode = waRequest::get('mode', '');
            $view_modes = array(
                array(
                    'action' => '',
                    'mode'   => '',
                    'url'    => 'logs/',
                    'title'  => _w('View files by directory'),
                    'sort'   => 0,
                    'icon'   => 'folders',
                ),
                array(
                    'action' => 'files',
                    'mode'   => 'updatetime',
                    'url'    => 'logs/?action=files&mode=updatetime',
                    'title'  => _w('Sort files by update time'),
                    'sort'   => 1,
                    'icon'   => 'bytime',
                ),
                array(
                    'action' => 'files',
                    'mode'   => 'size',
                    'url'    => 'logs/?action=files&mode=size',
                    'title'  => _w('Sort files by size'),
                    'sort'   => 2,
                    'icon'   => 'bysize',
                ),
            );
            foreach ($view_modes as &$view_mode) {
                $view_mode['selected'] = $view_mode['action'] == $action && $view_mode['mode'] == $mode;
            }
            usort($view_modes, array($this, 'sortViewModes'));

            $total_size = logsHelper::getTotalLogsSize();
            $this->view->assign(array(
                'view_modes'       => $view_modes,
                'total_size'       => $total_size > 0 ? logsHelper::formatSize($total_size) : null,
                'total_size_class' => logsHelper::isLargeSize($total_size) ? 'total-size total-size-large' : 'total-size',
            ));
        }
    }

    private function sortViewModes($a, $b)
    {
        if ($a['selected'] != $b['selected']) {
            return $b['selected'] ? 1 : -1;
        } else {
            return $a['sort'] < $b['sort'] ? -1 : 1;
        }
    }
}
