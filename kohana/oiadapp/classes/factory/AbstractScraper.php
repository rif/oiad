<?php

defined('SYSPATH') OR die('No Direct Script Access');

abstract class AbstractScraper {

    protected $xpath;

    public function scrape($site) {
      $oldSetting = libxml_use_internal_errors(true);
      libxml_clear_errors();
      $context = NULL;
      if ($site->cookie){
        $opts = array('http' => array('header'=> 'Cookie: '.$site->cookie."\r\n"));
        $context = stream_context_create($opts);
      }
      $pageToScrape = $site->page;
      try {
        /*
        Some sites have just a link to the deal, a link that is always changings.
        This for loop will load the initial page and if the derived scraper
        provides a different link than it will reaload the second page.
        */
        for($i=0; $i<2; $i++){
          $contents = file_get_contents($pageToScrape, false, $context);
  	      $html = new DOMDocument();
  	      $html->loadHtml($contents);
  	      $this->xpath = new DOMXPath($html);
          
          $pageToScrape = $this->_getPageToScrap($site->page);                
          if($pageToScrape == $site->page){
            break;
          } 
        }            
      } catch(ErrorException $e){
        return $e->getMessage();
      }
      
      $result = $this->loadDeal($site, $pageToScrape);
       
      libxml_clear_errors();
      libxml_use_internal_errors($oldSetting);
      return $result;
    }

    protected function _getPageToScrap($page) {
      return $page;
    }

    protected function loadDeal($site, $pageToScrape){
      $today = date('Y-m-d');      
      $deal = ORM::factory('deal');
      $deal->where('site', '=', $site->id)->where('pub_date', '=', $today)->find();      
      $deal->site = $site;
      $deal->item_link = $pageToScrape;
      $this->_fillDetails($deal, $pageToScrape);
      $deal->pub_date = $today;
      // the site automatic deactivation
      /*$lastDeal = ORM::factory('deal')->where('site', '=', $site->id)->where('pub_date', '<', $today)->order_by('pub_date', 'desc')->find();            
      if($deal->desc_short == $lastDeal){
        $site->active = 'F';
        $site->save();
        return 'The site is inactive!';
      }*/
      $deal->save();
      return $deal->id;
    }

    protected function _fillDetails($deal, $page) {}

    protected function _xpath($expr, $index=0) {
      $item = $this->xpath->query($expr);
      $item = $item ? $item->item($index) : Null;
      return $item ? trim($item->nodeValue) : '';
    }

    protected function _get_host($page){
      $p = parse_url($page);
      return "http://".$p['host']."/";
    }
}
?>
