<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://dailycigardeal.com/", new DailyCigarDeal());

class DailyCigarDeal extends AbstractMultipleScrapper {

  protected function _getDealIterator() {
    return "//img[@id='bigImg']/@src";
  }

  protected function _fillMultipleDetails($deal, $page, $count){
    $deal->item_link = $page;
    $deal->desc_short = $this->_xpath("//table[@style='padding:0px; margin:0px;']//td[@style='color:#371f07; font-size:18px; font-weight:bold; padding:0px 16px 5px 16px; height:48px;']", $count);
    $deal->price = $this->_xpath("//table[@style='padding:0px; margin:0px;']//td[@style='text-align:center; width:140px; color: #CB0A0A; font: bold 34px Tahoma,Geneva,sans-serif;']", $count);
    $deal->desc_long = $this->_xpath("//table[@width='240']", $count);
    $deal->pictures = $this->_xpath("//img[@id='bigImg']/@src", $count);
    $deal->shipping = $this->_xpath("");
  }
}

?>

