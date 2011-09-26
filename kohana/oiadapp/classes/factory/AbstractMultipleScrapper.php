<?php

defined('SYSPATH') OR die('No Direct Script Access');

abstract class AbstractMultipleScrapper extends AbstractScrapper {

    protected function loadDeal($site, $pageToScrapp){
      $today = date('Y-m-d');
      $result = array();
      $items = $this->xpath->query($this->_getDealIterator());
      for($i = 0; $i < $items->length; $i++){
        $deal = ORM::factory('deal');
        $deal->where('site', '=', $site->id)->where('pub_date', '=', $today)->where('count', '=', $i)->find();
        $deal->site = $site;
        $this->_fillMultipleDetails($deal, $pageToScrapp, $i);
        $deal->count = $i;
        $deal->pub_date = $today;
        $deal->save();
        array_push($result, $deal->id);
      }
      return $result;
    }

    protected function _getDealIterator() {}
    protected function _fillMultipleDetails($deal, $page, $count) {}
}

?>
