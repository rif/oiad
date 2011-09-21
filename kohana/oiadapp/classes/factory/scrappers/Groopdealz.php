<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.thedealmap.com/", new Groopdealz());

class Groopdealz extends AbstractMultipleScrapper {
    protected function _getDealIterator() {
    return "//div[@class='side_deals']//img/@src";
  }

  protected function _fillMultipleDetails($deal, $page, $count){
    $deal->item_link = $this->_xpath("//a[@class='deal-title']/@href", $count);
    $deal->desc_short = $this->_xpath("//div[@class='hp_side_deal_title']", $count);
    $deal->price = $this->_xpath("//a[@class='deal-title']", $count);
    $deal->desc_long = $this->_xpath("//div[@class='listing-address']", $count);
    $deal->pictures = $this->_xpath("//div[@class='side_deals']//img/@src", $count);
    $deal->shipping = $this->_xpath("", $count);
  }
}

?>

