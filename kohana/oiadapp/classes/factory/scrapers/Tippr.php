<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://tippr.com/", new Tippr());

class Tippr extends AbstractMultipleScrapper {
    protected function _getDealIterator() {
    return "//div[@class='exhibit-image']/a/img/@src";
  }

  protected function _fillMultipleDetails($deal, $page, $count){
    $deal->item_link = "http://tippr.com".$this->_xpath("//h4[@class='offer-exhibit-headline']/a/@href", $count);
    $deal->desc_short = $this->_xpath("//h4[@class='offer-exhibit-headline']/a", $count);
    $deal->price = $this->_xpath("//span[@class='cost']", $count);
    $deal->desc_long = $this->_xpath("", $count);
    $deal->pictures = $this->_xpath("//div[@class='exhibit-image']/a/img/@src", $count);
    $deal->shipping = $this->_xpath("", $count);
  }
}

?>

