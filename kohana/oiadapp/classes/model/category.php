<?php defined('SYSPATH') OR die('No Direct Script Access');


class Model_Category extends ORM
{
    
protected $_has_many = array(
    'sites' => array(
        'model'   => 'site',
        'through' => 'categories_sites',
    ),
);
}
