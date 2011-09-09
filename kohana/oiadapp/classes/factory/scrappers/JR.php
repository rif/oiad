<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.jr.com/promotions/deal-of-the-day/", new JR());

class JR extends AbstractScrapper {

  protected function _getDealIterator() {
    return "//div[@class='calloutContent']//img[@class='productImage ']/@src";
  }

  protected function _fillMultipleDetails($deal, $page, $count){
    $deal->item_link = $this->_xpath("//span[@class='infoBody']/a/@href", $count);
    $deal->desc_short = $this->_xpath("//h2[@class='calloutContentHeader']/span[1]", $count);
    $deal->price = $this->_xpath("//div[@class='productItemPriceLink']/span[@class='productItemPrice']", $count);
    $deal->desc_long = $this->_xpath("//span[@class='infoBody']", $count);
    $deal->pictures = $this->_xpath("//div[@class='calloutContent']//img[@class='productImage ']/@src", $count);
    $deal->shipping = $this->_xpath("", $count);
  }
}

?>

