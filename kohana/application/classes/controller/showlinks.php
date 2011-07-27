<?php defined('SYSPATH') OR die('No Direct Script Access');
 
Class Controller_Showlinks extends Controller_Template
{
	public $template = 'show';
    public function action_index()
    {	
		$links = ORM::factory('link');
       	$this->template->links = $links->find_all();	
    }
}
