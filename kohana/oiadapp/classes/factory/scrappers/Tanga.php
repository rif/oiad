<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.tanga.com/", new Tanga());

class Tanga extends AbstractMultipleScrapper {

  protected function _getDealIterator() {
    return "//div[@class='image']/div/div/a/img/@src";
  }

  protected function _fillMultipleDetails($deal, $page, $count){
    $deal->item_link = $page.$this->_xpath("//div[@class='content']/h4/a/@href", $count);
    $deal->desc_short = $this->_xpath("//div[@class='content']/h4/a", $count);
    $deal->price = $this->_xpath("//div[@class='price']", $count);
    $deal->desc_long = $this->_xpath("//div[@class='description']", $count);
    $deal->pictures = $this->_xpath("//div[@class='image']/div/div/a/img/@src", $count);
    $deal->shipping = $this->_xpath("", $count);
  }
}

?>

