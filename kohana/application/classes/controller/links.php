<?php

defined('SYSPATH') OR die('No Direct Script Access');
require_once Kohana::find_file('classes', 'factory/PolyFactory');
require_once Kohana::find_file('classes', 'factory/AbstractScrapper');

foreach (Kohana::list_files('classes/factory/scrappers') as $filename) {
    require_once $filename;
}

Class Controller_Links extends Controller_Template {

	public $template = 'base';

     public function action_index() {
        $view = View::factory('links/show');
        if (!empty($_POST)) {
		$saved = 0;
		$links = ORM::factory('link');
		foreach(explode("\n", $_POST['hosts']) as $site){
			$this_address = $links->where('host', '=', $site)->find_all();
			
		if(count ($this_address) == 0){
		    $link = ORM::factory('link');
		    $link->host = $site;
		    $link->save();
		    $saved++;
		}        
            }
            if($saved == 0) {
		echo "Nothing new!";
	    }
        }

        $view->title = "OIAD";
        $links = ORM::factory('link');
        $view->links = $links->find_all();
        $this->template->content = $view;
    }
    
    public function action_scrapp() {
        $view = View::factory('links/scrapp');
        $links = ORM::factory('link');
        $link_id = $this->request->param('id');
        $view->content = '';
        if($link_id != '') {
        	$link = $links->where('id', '=', $link_id)->find();
        	$scrapper = PolyFactory::getScrapper($link->host);
				if ($scrapper) {
					$deal_id = $scrapper->scrapp($link->host);
					$view->content .= HTML::anchor('/deals/showdeal/'.$deal_id, $link->host)."<br />";
				}
        } else {
			$links = $links->where('active', '=', 'T')->find_all();
			
			$index = 1;
			foreach ($links as $link) {
				$scrapper = PolyFactory::getScrapper($link->host);
				if ($scrapper) {
					$deal_id = $scrapper->scrapp($link->host);
					$view->content .= ($index++).". ".HTML::anchor('/deals/showdeal/'.$deal_id, $link->host)."<br />";
				}
			}
        }
        $this->template->content = $view;
    }
    
    public function action_edit() {
        $view = View::factory('links/edit');
        $link_id = $this->request->param('id');
        $link = ORM::factory('link', $link_id);
        if (!empty($_POST)) {
            $link->values($_POST); // load values to model
            // check() initializes $model->_validate with a Validation object containing the
            // rules, filters and callbacks from Model_User (e.g. $_rules, $_callbacks..)
            //if ($model->check()) {
            $link->save(); // save the model
            $this->request->redirect(URL::site('/'));
            //} else {
            // Load errors. The first param is the path to the
            // message file (e.g. /messages/register.php)
            //		$this->template->errors = $model->validate()->errors('show');
            //}          
        }
        $view->link = $link;
        $this->template->content = $view;
    }
}
