<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.groopdealz.com/", new Groopdealz());

class Groopdealz extends AbstractMultipleScrapper {
    protected function _getDealIterator() {
    return "//div[@class='side_deals']//img/@src";
  }

  protected function _fillMultipleDetails($deal, $page, $count){
    $deal->item_link = "http://www.groopdealz.com".$this->_xpath("//div[@class='side_deals']//div[@class='view_deal_link']/a/@href", $count);
    $deal->desc_short = $this->_xpath("//div[@class='hp_side_deal_title']", $count);
    $deal->price = $this->_xpath("");
    $deal->desc_long = $this->_xpath("");
    $deal->pictures = $this->_xpath("//div[@class='side_deals']//img/@src", $count);
    $deal->shipping = $this->_xpath("");
  }
}

?>

