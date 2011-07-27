<?php defined('SYSPATH') or die('No direct script access.');


return array
(
'default' => array(
    'type'         =>  'mysql',
    'connection'   => array(
            'hostname'   => 'localhost',
            'username'   => 'root',
            'password'   => '123456',
            'persistent' => FALSE,
            'database'   => 'oiad',
        ),
    'table_prefix' =>  '',
    'charset'      => 'utf8',
    'profiling'    => TRUE,
),
);
