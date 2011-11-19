<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://propertyroom.com/c/steal-of-the-day", new PropertyRoom());

class PropertyRoom extends AbstractMultipleScraper {

  protected function _getDealIterator() {
    return "//img[@id='uxImage']/@src";
  }

  protected function _fillMultipleDetails($deal, $page, $count){
    $deal->item_link = "http://propertyroom.com".$this->_xpath("//a[@id='uxTitle']/@href", $count);
    $deal->desc_short = $this->_xpath("//a[@id='uxTitle']", $count);
    $deal->price = $this->_xpath("//div[@id='uxPrice']", $count);
    $deal->desc_long = $this->_xpath("", $count);
    $deal->pictures = $this->_xpath("//img[@id='uxImage']/@src", $count);
    $deal->shipping = "http://propertyroom.com".$this->_xpath("//a[contains(.,'Shipping Information')]/@href");
  }
}

?>

