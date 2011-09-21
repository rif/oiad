<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://savvyfamilies.dailycart.com/", new Savvyfamilies());

class Savvyfamilies extends AbstractMultipleScrapper {
    protected function _getDealIterator() {
      return "//div[@class='left']/a/img/@src";
  }

  protected function _fillMultipleDetails($deal, $page, $count){
    $deal->item_link = "http://savvyfamilies.dailycart.com".$this->_xpath("//div[@class='right']//a[@class='gwo mainBuyBtn']/@href", $count);
    $deal->desc_short = $this->_xpath("//div[@class='right']/h1", $count);
    $deal->price = $this->_xpath("//div[@class='offerprice']/p", $count);
    $deal->desc_long = $this->_xpath("//div[@class='right']/p", $count);
    $deal->pictures = $this->_xpath("//div[@class='left']/a/img/@src", $count);
    $deal->shipping = $this->_xpath("");
  }
}

?>

