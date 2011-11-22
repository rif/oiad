<?php defined('SYSPATH') OR die('No Direct Script Access');

require_once Kohana::find_file('classes', 'factory/PolyFactory');
require_once Kohana::find_file('classes', 'factory/AbstractScraper');
require_once Kohana::find_file('classes', 'factory/AbstractMultipleScraper');
require_once Kohana::find_file('classes', 'factory/AbstractFeedScraper');

foreach (Kohana::list_files('classes/factory/scrapers') as $filename) {
    require_once $filename;
}

$ln = php_sapi_name() == 'cli' ? '\n' : '<br />';

Class Controller_Scrape extends Controller {

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
    $scraper = PolyFactory::getScraper($page);
    $content = '';
    if ($scraper) {
        $deal_id = $scraper->scrape($site);
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
               $content .= "scrape failed for ".$site->page." reason:".$deal_id."<br />";
          }
        }
    }
    $site->last_scrape = date ("Y-m-d H:i:s");
    $site->save();
    $this->response->body($content);
  }

  private function scrape($sites){
    $index = 1;
    $content = '';
    foreach ($sites as $site) {
      $page = $site->page;
      if($site->is_deal){
        $page = $this->_get_host($site->page);
      }
      $scraper = PolyFactory::getScraper($page);
      if ($scraper) {
        $deal_id = $scraper->scrape($site);
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
               $content .= "scrape failed for ".$site->page." reason:".$deal_id."<br />";
          }
        }
      }
      $site->last_scrape = date ("Y-m-d H:i:s");
      $site->save();
    }
  }

  public function action_all() {
    $sites = ORM::factory('site');
    $sites = $sites->where('active', '=', 'T')->find_all();

    $content = $this->scrape($sites);
    $this->response->body($content);
  }

  public function action_expired() {
    $sites = ORM::factory('site');
    $sites = $sites->where('active', '=', 'T')->find_all();
    $expired_sites = array();

    foreach ($sites as $site) {
      $refresh = $site->refresh_period;
      if($refresh){
        $next_scrape = strtotime("+$refresh minutes",strtotime($site->last_scrape));
        $now = strtotime("now");
        if($next_scrape - $now < 0){
          array_push($expired_sites, $site);
        }
      }
    }

    $content = $this->scrape($expired_sites);
    $this->response->body($content);
  }
}
