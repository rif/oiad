<?php defined('SYSPATH') OR die('No Direct Script Access');


class Model_Deal extends ORM
{
    protected $_belongs_to = array('site' => array('foreign_key' => 'id',));
}
