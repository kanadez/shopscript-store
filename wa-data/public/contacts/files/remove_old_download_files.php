<?php

$dirs = array_filter(glob('*'), 'is_dir');

foreach ($dirs as $dir){
    $time_expired = 3600;
    
    if (time()-filectime($dir) > $time_expired){
        deleteDir(getcwd()."/".$dir);
    }
}

function deleteDir($dirPath) {
    if (!is_dir($dirPath)) {
        return false;
    }
    
    if (substr($dirPath, strlen($dirPath) - 1, 1) != '/') {
        $dirPath .= '/';
    }
    
    $files = glob($dirPath . '*', GLOB_MARK);
    
    foreach ($files as $file){
        if (is_dir($file)){
            deleteDir($file);
        } 
        else{
            unlink($file);
        }
    }
    
    rmdir($dirPath);
}