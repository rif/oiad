<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.razordogdeals.com/", new RazorDogDeals());

class RazorDogDeals extends AbstractScrapper {

  protected function _getDealIterator() {
    return "//div[@class='gallery-image']/a/img/@src";
  }

  protected function _fillMultipleDetails($deal, $page, $count){
    $deal->item_link = $page.$this->_xpath("//div[@class='gallery-info']/a/@href", $count);
    $deal->desc_short = $this->_xpath("//div[@class='gallery-info']/a", $count);
    $prices = explode(" ", $this->_xpath("//div[@class='gallery-info']/small", $count));
    $deal->price = $prices[0];
    $deal->desc_long = $this->_xpath("", $count);
    $deal->pictures = $this->_xpath("//div[@class='gallery-image']/a/img/@src", $count);
    $deal->shipping = $this->_xpath("//div[@id='about-excerpt']/p[2]/em");
  }
}

?>

