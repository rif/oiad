<?php defined('SYSPATH') OR die('No Direct Script Access');

require_once Kohana::find_file('classes', 'factory/PolyFactory');
require_once Kohana::find_file('classes', 'factory/AbstractScrapper');

foreach (Kohana::list_files('classes/factory/scrappers') as $filename) {
    require_once $filename;
}

$ln = php_sapi_name() == 'cli' ? '\n' : '<br />';

Class Controller_Scrapp extends Controller {

  public function action_index() {
    $sites = ORM::factory('site');
    $site_id = $this->request->param('id');
    $site = $sites->where('id', '=', $site_id)->find();
    $scrapper = PolyFactory::getScrapper($site->page);
    $content = '';
    if ($scrapper) {
        $deal_id = $scrapper->scrapp($site);
        if(is_numeric($deal_id)){
	        if (php_sapi_name() == 'cli') {
	             echo $site->name." OK!\n";
          } else {
	             $content .= HTML::anchor('/deals/showdeal/'.$deal_id, $site->page)."<br />";
          }
        } else {
          if (php_sapi_name() == 'cli') {
               $content .= $site->name." ".$deal_id."\n";
          } else {
               $content .= "scrapp failed for ".$site->page." reason:".$deal_id."<br />";
          }
        }
    }
    $this->response->body($content);
  }
      
  public function action_all() {
    $sites = ORM::factory('site');
    $sites = $sites->where('active', '=', 'T')->find_all();
      
    $index = 1;
    $content = '';
    foreach ($sites as $site) {
      $scrapper = PolyFactory::getScrapper($site->page);
      if ($scrapper) {
        $deal_id = $scrapper->scrapp($site);
        if(is_numeric($deal_id)){
           if (php_sapi_name() == 'cli') {
               echo $site->name." OK!\n";
          } else {
               $content .= ($index++).". ".HTML::anchor('/deals/showdeal/'.$deal_id, $site->page)."<br />";
          }
        } else {
          if (php_sapi_name() == 'cli') {
               echo $site->name." ".$deal_id."\n";
          } else {
               $content .= "scrapp failed for ".$site->page." reason:".$deal_id."<br />";
          }
        }         
      }
    }
    $this->response->body($content);
  }
}
