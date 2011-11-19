<?php

defined('SYSPATH') OR die('No Direct Script Access');

abstract class AbstractFeedScraper extends AbstractScraper {

    public function scrape($site) {
      $today = date('Y-m-d');

      $items = Feed::parse($site->page);
      $deal = ORM::factory('deal');
      $deal->where('site', '=', $site->id)->where('pub_date', '=', $today)->find();
      $deal->site = $site;
      $deal->item_link = $site->page;
      if(count($items)>0) {
        $this->_fillFeedDetails($deal, $items[0]);
      }
      $deal->pub_date = $today;
      $deal->save();
      return $deal->id;
    }

    protected function _fillFeedDetails($deal, $item){}
}
?>
