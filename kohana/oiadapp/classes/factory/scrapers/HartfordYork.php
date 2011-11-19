<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.hartfordyork.com/category/daily-deal", new HartfordYork());

class HartfordYork extends AbstractMultipleScrapper {

  protected function _getDealIterator() {
    return "//table[@class='cat-image']//img/@src";
  }

  protected function _fillMultipleDetails($deal, $page, $count){
    $deal->item_link = $this->_xpath("//table[@class='cat-image']//img/following::a[1]/@href", $count);
    $deal->desc_short = $this->_xpath("//table[@class='cat-image']//img/following::a[1]", $count);
    $deal->price = $this->_xpath("//span[@class='price']", $count);
    $deal->desc_long = $this->_xpath("", $count);
    $deal->pictures = $this->_xpath("//table[@class='cat-image']//img/@src", $count);
    $deal->shipping = $this->_xpath("", $count);
  }
}

?>

