<?php

class logsFrontendDownloadFileController extends waController
{
    public function execute()
    {
        $hash = waRequest::param('hash');
        $path = waRequest::param('path');

        try {
            if (!strlen($hash) || !strlen($path)) {
                throw new Exception(_w('Empty hash or file path.'));
            }

            $published_model = new logsPublishedModel();

            if (!$published_model->isPublished($path, $hash)) {
                throw new Exception(sprintf(_w('File %s is not published.'), $path));
            }

            $full_path = logsHelper::getFullFilePath($path);

            if (!is_readable($full_path)) {
                throw new Exception(sprintf(_w('File %s does not exist.'), $path));
            }

            waFiles::readFile($full_path);
        } catch (Exception $e) {
            if (waSystemConfig::isDebug()) {
                logsHelper::log($e->getMessage());
            }
            throw new waException('', 403);
        }
    }
}
