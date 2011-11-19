<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://dealpulp.com/", new Dealpulp());

class Dealpulp extends AbstractMultipleScraper {

  protected function _getDealIterator() {
    return "//div[@class='realHolder']/a/img/@src";
  }

  protected function _fillMultipleDetails($deal, $page, $count){
    $deal->item_link = "http://dealpulp.com".$this->_xpath("//div[@class='realHolder']/a/@href", $count);
    $deal->desc_short = $this->_xpath("//td[@class='title']", $count);
    $deal->price = $this->_xpath("//span[@class='priceLabel']", $count);
    $deal->desc_long = $this->_xpath("", $count);
    $deal->pictures = $page.$this->_xpath("//div[@class='realHolder']/a/img/@src", $count);
    $deal->shipping = $this->_xpath("", $count);
  }
}

?>

