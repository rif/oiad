<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.thedealmap.com/", new Dealmap());

class Dealmap extends AbstractMultipleScraper {
    protected function _getDealIterator() {
    return "//img[contains(@class,'deal-image')]/@src";
  }

  protected function _fillMultipleDetails($deal, $page, $count){
    $deal->item_link = $this->_xpath("//a[@class='deal-title']/@href", $count);
    $deal->desc_short = $this->_xpath("//a[@class='deal-title']", $count);
    $deal->price = $this->_xpath("//a[@class='deal-title']", $count);
    $deal->desc_long = $this->_xpath("//div[@class='listing-address']", $count);
    $deal->pictures = $this->_xpath("//img[contains(@class,'deal-image')]/@src", $count);
    $deal->shipping = $this->_xpath("", $count);
  }
}

?>

