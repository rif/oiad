<?php

defined('SYSPATH') OR die('No Direct Script Access');
require_once Kohana::find_file('classes', 'factory/PolyFactory');
require_once Kohana::find_file('classes', 'factory/AbstractScrapper');

foreach (Kohana::list_files('classes/factory/scrappers') as $filename) {
    require_once $filename;
}

Class Controller_Links extends Controller {

     public function action_index() {
        $view = View::factory('links/show');
        if (!empty($_POST)) {
            ///$model = ORM::factory('link'); // create
            ///$model->values($_POST); // load values to model
            // check() initializes $model->_validate with a Validation object containing the
            // rules, filters and callbacks from Model_User (e.g. $_rules, $_callbacks..)
            //if ($model->check()) {
            ///$model->save(); // save the model
            //} else {
            // Load errors. The first param is the path to the
            // message file (e.g. /messages/register.php)
            //		$this->template->errors = $model->validate()->errors('show');
            //}
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
        $this->response->body($view);
    }
    
    public function action_scrapp() {
        #$this->template->title = "OIAD";
        $links = ORM::factory('link');
        $links = $links->where('active', '=', 'T')->find_all();
        
        $index = 1;
        foreach ($links as $link) {
            $scrapper = PolyFactory::getScrapper($link->host);
            if ($scrapper) {
                echo $index++.". <b>" . $link->host . "</b><br />";
                $scrapper->scrapp($link->host);
            }
        }
    }
}