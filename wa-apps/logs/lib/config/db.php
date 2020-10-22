<?php
return array(
    'logs_published' => array(
        'path' => array('text', 'null' => 0),
        'hash' => array('varchar', 255, 'null' => 0),
        ':keys' => array(
            'hash' => array('hash', 'unique' => 1),
        ),
    ),
);
