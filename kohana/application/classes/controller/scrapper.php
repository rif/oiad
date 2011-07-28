<?php

defined('SYSPATH') OR die('No Direct Script Access');
foreach (Kohana::list_files('classes/factory') as $filename) {
    require_once $filename;
}

Class Controller_Scrapper extends Controller {
    #public $template = 'show';

    public function action_index() {
        #$this->template->title = "OIAD";
        $links = ORM::factory('link');
        $links = $links->find_all();

        foreach ($links as $link)
        {
            $parse = parse_url($link->address);            
            $scrapper = PolyFactory::getScrapper($parse['host']);
            if ($scrapper)
            {
                echo "<b>".$parse['host']."</b><br />";
                $scrapper->scrapp();
            }
        }
    }

}