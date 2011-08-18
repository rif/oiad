<?php defined('SYSPATH') OR die('No Direct Script Access');

require_once Kohana::find_file('classes', 'factory/PolyFactory');
require_once Kohana::find_file('classes', 'factory/AbstractScrapper');

foreach (Kohana::list_files('classes/factory/scrappers') as $filename) {
    require_once $filename;
}

Class Controller_Scrapp extends Controller {

  public function action_index() {
    $sites = ORM::factory('site');
    $site_id = $this->request->param('id');
    $site = $sites->where('id', '=', $site_id)->find();
    $scrapper = PolyFactory::getScrapper($site->page);
    if ($scrapper) {
      $deal_id = $scrapper->scrapp($site);
      if(is_numeric($deal_id)){
	echo  php_sapi_name() == 'cli' ?
	  $site->name." OK!\n" :
	  HTML::anchor('/deals/showdeal/'.$deal_id, $site->page)."<br />";
      } else {
	echo "scrapp failed for ".$site->page." reason:".$deal_id."<br />";
      }
    }
    $this->view->content = 'mama';
  }
      
  public function action_all() {
    $view = View::factory('deals/deal');

    $view->deal = ORM::factory('deal', $this->request->param('id'));
    $this->template->content = $view;
  }
}
