<?php

/*
 * This file is part of Webasyst framework.
 *
 * Licensed under the terms of the GNU Lesser General Public License (LGPL).
 * http://www.webasyst.com/framework/license/
 *
 * @link http://www.webasyst.com/
 * @author Webasyst LLC
 * @copyright 2011 Webasyst LLC
 * @package installer
 */

class installerConfig extends waAppConfig
{
    protected $application_config = array();

    public function init()
    {
        parent::init();
        require_once($this->getPath('installer', 'lib/init'));
    }

    public function onCount()
    {
        $args = func_get_args();
        $force = array_shift($args);

        $model = new waAppSettingsModel();
        $app_id = $this->getApplication();
        $count = null;

        //check cache expiration time
        if ($force || ((time() - $model->get($app_id, 'update_counter_timestamp', 0)) > 600) || is_null($count = $model->get($app_id, 'update_counter', null))) {
            $count = installerHelper::getUpdatesCounter('total');
            //check available versions for installed items
            //download if required changelog & requirements for updated items
            //count applicable updates (optional)
            $model->ping();
        } elseif (is_null($count)) {
            $count = $model->get($app_id, 'update_counter');
        }
        if ($count) {
            $count = array(
                'count' => $count,
                'url'   => $url = $this->getBackendUrl(true).$this->application.'/?module=update',
            );
        }
        return $count;
    }

    public function setCount($n = null)
    {
        wa()->getStorage()->open();
        $model = new waAppSettingsModel();
        $model->ping();
        $app_id = $this->getApplication();
        $model->set($app_id, 'update_counter', $n);
        $model->set($app_id, 'update_counter_timestamp', ($n === false) ? 0 : time());
        parent::setCount($n);
    }

    public function explainLogs($logs)
    {
        $logs = parent::explainLogs($logs);

        if ($logs) {
            $app_url = wa()->getConfig()->getBackendUrl(true).$this->getApplication().'/';

            $actions = array(
                'item_install'   => array(
                    'apps'    => _wd($this->application, 'App %s installed'),
                    'plugins' => _wd($this->application, 'Plugin %s installed'),
                    'widgets' => _wd($this->application, 'Widget %s installed'),
                    'themes'  => _wd($this->application, 'Theme %s installed'),
                ),
                'item_update'    => array(
                    'apps'    => _wd($this->application, 'App %s updated'),
                    'plugins' => _wd($this->application, 'Plugin %s updated'),
                    'widgets' => _wd($this->application, 'Widget %s updated'),
                    'themes'  => _wd($this->application, 'Theme %s updated'),
                ),
                'item_enable'    => array(
                    'apps'    => _wd($this->application, 'App %s enabled'),
                    'plugins' => _wd($this->application, 'Plugin %s enabled'),
                    'widgets' => _wd($this->application, 'Widget %s enabled'),
                    'themes'  => _wd($this->application, 'Theme %s enabled'),
                ),
                'item_disable'   => array(
                    'apps'    => _wd($this->application, 'App %s disabled'),
                    'plugins' => _wd($this->application, 'Plugin %s disabled'),
                    'widgets' => _wd($this->application, 'Widget %s disabled'),
                    'themes'  => _wd($this->application, 'Theme %s disabled'),
                ),
                'item_uninstall' => array(
                    'apps'    => _wd($this->application, 'App %s uninstalled'),
                    'plugins' => _wd($this->application, 'Plugin %s uninstalled'),
                    'widgets' => _wd($this->application, 'Widget %s uninstalled'),
                    'themes'  => _wd($this->application, 'Theme %s uninstalled'),
                ),
            );

            foreach ($logs as $l_id => &$l) {
                $l['params_html'] = '';
                if (isset($actions[$l['action']]) && $l['params']) {
                    $p = json_decode($l['params'], true);

                    if (isset($actions[$l['action']][$p['type']])) {
                        if ($p['type'] == 'themes') {
                            $url = sprintf('%s#/%s/%s/', $app_url, $p['type'], preg_replace('@^.+?/@', '', $p['id']));
                        } else {
                            $url = sprintf('%s#/%s/%s/', $app_url, $p['type'], $p['id']);
                        }
                        $name = sprintf('<a href="%s">%s</a>', $url, $p['id']);
                        $l['params_html'] .= sprintf($actions[$l['action']][$p['type']], $name);
                    }
                }
                unset($l);
            }
        }
        return $logs;
    }
}
