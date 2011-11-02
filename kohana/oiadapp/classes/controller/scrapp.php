<?php defined('SYSPATH') OR die('No Direct Script Access');

require_once Kohana::find_file('classes', 'factory/PolyFactory');
require_once Kohana::find_file('classes', 'factory/AbstractScrapper');
require_once Kohana::find_file('classes', 'factory/AbstractMultipleScrapper');
require_once Kohana::find_file('classes', 'factory/AbstractFeedScrapper');

foreach (Kohana::list_files('classes/factory/scrappers') as $filename) {
    require_once $filename;
}

$ln = php_sapi_name() == 'cli' ? '\n' : '<br />';

Class Controller_Scrapp extends Controller {

  protected function _get_host($page){
      $p = parse_url($page);
      return "http://".$p['host']."/";
  }

  public function action_index() {
    $site_id = $this->request->param('id');
    $site = ORM::factory('site',  $site_id);
    $page = $site->page;
    if($site->is_deal == 'T'){
      $page = $this->_get_host($site->page);
    }
    $scrapper = PolyFactory::getScrapper($page);
    $content = '';
    if ($scrapper) {
        $deal_id = $scrapper->scrapp($site);
        if(is_numeric($deal_id)){
	        if (php_sapi_name() == 'cli') {
	             echo $site->name." OK!\n";
          } else {
	             $content .= HTML::anchor('/sites/showdeal/'.$deal_id, $site->name)."<br />";
          }
        } elseif(is_array($deal_id)) {
          if (php_sapi_name() == 'cli') {
              echo $site->name." OK!\n";
          } else {
              foreach($deal_id as $i=>$id){
                $content .= HTML::anchor('/sites/showdeal/'.$id, $site->name.' #'.$i)."<br />";
              }
          }
        } else {
          if (php_sapi_name() == 'cli') {
               $content .= $site->name." ".$deal_id."\n";
          } else {
               $content .= "scrapp failed for ".$site->page." reason:".$deal_id."<br />";
          }
        }
    }
    $site->last_scrapp = date ("Y-m-d H:i:s");
    $site->save();
    $this->response->body($content);
  }

  private function scrapp($sites){
    $index = 1;
    $content = '';
    foreach ($sites as $site) {
      $page = $site->page;
      if($site->is_deal){
        $page = $this->_get_host($site->page);
      }
      $scrapper = PolyFactory::getScrapper($page);
      if ($scrapper) {
        $deal_id = $scrapper->scrapp($site);
        if(is_numeric($deal_id)){
           if (php_sapi_name() == 'cli') {
               echo $site->name." OK!\n";
          } else {
               $content .= ($index++).". ".HTML::anchor('/sites/showdeal/'.$deal_id, $site->name)."<br />";
          }
        } elseif(is_array($deal_id)) {
          if (php_sapi_name() == 'cli') {
              echo $site->name." OK!\n";
          } else {
              $index++;
              foreach($deal_id as $i=>$id){
                $content .= $index.'_'.$i.". ".HTML::anchor('/sites/showdeal/'.$id, $site->name.' #'.$i)."<br />";
              }
          }
        } else {
          if (php_sapi_name() == 'cli') {
               echo $site->name." ".$deal_id."\n";
          } else {
               $content .= "scrapp failed for ".$site->page." reason:".$deal_id."<br />";
          }
        }
      }
      $site->last_scrapp = date ("Y-m-d H:i:s");
      $site->save();
    }
  }

  public function action_all() {
    $sites = ORM::factory('site');
    $sites = $sites->where('active', '=', 'T')->find_all();

    $content = $this->scrapp($sites);
    $this->response->body($content);
  }

  public function action_expired() {
    $sites = ORM::factory('site');
    $sites = $sites->where('active', '=', 'T')->find_all();
    $expired_sites = array();

    foreach ($sites as $site) {
      $refresh = $site->refresh_period;
      if($refresh){
        $next_scrapp = strtotime("+$refresh minutes",strtotime($site->last_scrapp));
        $now = strtotime("now");
        if($next_scrapp - $now < 0){
          array_push($expired_sites, $site);
        }
      }
    }

    $content = $this->scrapp($expired_sites);
    $this->response->body($content);
  }
}
