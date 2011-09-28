<?php defined('SYSPATH') OR die('No Direct Script Access');


class Model_Deal extends ORM
{
    protected $_belongs_to = array(
        'parent_site' => array(
            'model'       => 'site',
            'foreign_key' => 'site',
        ),
    );
}
