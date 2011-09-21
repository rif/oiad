<?php

defined('SYSPATH') OR die('No Direct Script Access');

abstract class AbstractFeedScrapper extends AbstractScrapper {

    public function scrapp($site) {
      $today = date('Y-m-d');

      $items = Feed::parse($site->page);

      $deal = ORM::factory('deal');
      $deal->where('site', '=', $site->id)->where('pub_date', '=', $today)->find();
      $deal->site = $site;
      $deal->item_link = $site->page;
      $this->_fillFeedDetails($deal, $items[0]);
      $deal->pub_date = $today;
      $deal->save();
      return $deal->id;
    }

    protected function _fillFeedDetails($deal, $item){}
}
?>