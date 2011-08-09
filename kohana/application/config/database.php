<?php defined('SYSPATH') or die('No direct script access.');


return array
(
'default' => array(
    'type'         =>  'mysql',
    'connection'   => array(
            'hostname'   => 'localhost',
            'username'   => 'root',
            'password'   => 'UARdeveloper',
            'persistent' => FALSE,
            'database'   => 'oiad',
        ),
    'table_prefix' =>  '',
    'charset'      => 'utf8',
    'profiling'    => TRUE,
),
);
