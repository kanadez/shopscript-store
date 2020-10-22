<?php

class logsBackendDeleteController extends waJsonController
{
    public function execute()
    {
        $path = waRequest::post('path', '', waRequest::TYPE_STRING_TRIM);

        try {
            if (!strlen($path)) {
                throw new Exception(_w('Empty file path submitted for deletion.'));
            }

            if (!$this->getRights('delete_files')) {
                throw new Exception(sprintf(_w('Insufficient access rights for user id=%u to delete log file %s.'), wa()->getUser()->getId(), $path));
            }

            $full_path = logsHelper::getAbsolutePath($path);
            $available = logsHelper::checkPath($full_path, false);

            if (!$available) {
                throw new Exception(sprintf(_w('File %s is not available for deletion.'), $path));
            }

            $deleted = waFiles::delete($full_path);

            if (!$deleted) {
                throw new Exception(sprintf(_w('Could not delete file %s.'), $path));
            }

            $this->logAction('file_delete', $path);

            $published_model = new logsPublishedModel();
            $published_model->deleteByField(array(
                'path' => $path,
            ));

            $update_total_size = (bool) waRequest::get('update_size', 0, waRequest::TYPE_INT);
            if ($update_total_size) {
                $total_size = logsHelper::getTotalLogsSize();
                $is_large = logsHelper::isLargeSize($total_size);
                //remove outdated indicator from cache
                if (!$is_large) {
                    $apps_count = wa()->getStorage()->read('apps-count');
                    unset($apps_count['logs']);
                    wa()->getStorage()->set('apps-count', $apps_count);
                }
                $this->response['total_size'] = logsHelper::formatSize($total_size);
                $this->response['total_size_class'] = $is_large ? 'total-size total-size-large' : 'total-size';
                $this->response['is_large'] = $is_large;
            } else {
                $this->response['total_size'] = '';
            }
        } catch (Exception $e) {
            logsHelper::log($e->getMessage());
            $this->errors[] = _wp('File cannot be deleted. See logs/errors.log file for details.');
        }
    }
}
