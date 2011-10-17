<?php defined('SYSPATH') OR die('No Direct Script Access');


class Model_Preference extends ORM
{
    protected $_belongs_to = array(
        'user' => array(
            'model'       => 'user',            
        ),
    );
}
