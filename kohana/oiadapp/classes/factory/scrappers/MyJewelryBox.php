<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.myjewelrybox.com/", new MyJewelryBox());

class MyJewelryBox extends AbstractScrapper {

  protected function _getDealIterator() {
    return "//div[@class='box-body']//img/@src";
  }

  protected function _fillMultipleDetails($deal, $page, $count){
    $deal->item_link = $page.$this->_xpath("//div[@class='box-body']//a/@href", $count);
    $deal->desc_short = $this->_xpath("//div[@class='box-body']//a", $count);
    $deal->price = $this->_xpath("//div[@class='box-body']//a/span", $count);
    $deal->desc_long = $this->_xpath("", $count);
    $deal->pictures = $this->_xpath("//div[@class='box-body']//img/@src", $count);
    $deal->shipping = $this->_xpath("", $count);
  }
}

?>

