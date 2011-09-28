<?php defined('SYSPATH') OR die('No Direct Script Access');


class Model_Site extends ORM
{
    protected $_has_many = array(
        'deals' => array('foreign_key' => 'site'),
        'categories' => array(
            'model'   => 'category',
            'through' => 'categories_sites',
            ),
    );
    
     /*public function rules()
    {
        return array(
            'rss' => array(
                array('not_empty'=>null),
                //array('min_length', array(':value', 5)),
                //array('max_length', array(':value', 127)),
                //array('url'),
            ),
        );
    }*/
}
