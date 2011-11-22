<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.5stardeal.com/", new StarDeal());

class StarDeal extends AbstractMultipleScraper {

  protected function _getDealIterator() {
    return "//img[contains(@class,'dealimg')]/@src";
  }

  protected function _fillMultipleDetails($deal, $page, $count){
    $deal->item_link = $page.$this->_xpath("//div[@class='content']/h4/a/@href", $count);
    $deal->desc_short = $this->_xpath("//span[@class='title']", $count);
    $deal->desc_long = $this->_xpath("");
    $deal->price = $this->_xpath("//div[@class='dealinfo']/span[@class='now']", $count);
    $deal->pictures = $this->_xpath("//img[contains(@class,'dealimg')]/@src", $count);    
    $deal->shipping = $this->_xpath("");
  }
}

?>