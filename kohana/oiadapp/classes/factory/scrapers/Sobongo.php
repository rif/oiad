<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.sobongo.com/daily-deal", new Sobongo());

class Sobongo extends AbstractMultipleScraper {

  protected function _getDealIterator() {
    return "//div[@class='thumbnail']/a/img/@src";
  }

  protected function _fillMultipleDetails($deal, $page, $count){
    $deal->item_link = $this->_xpath("//h3[@class='product-name']/a/@href", $count);
    $deal->desc_short = $this->_xpath("//h3[@class='product-name']/a", $count);
    $deal->price = $this->_xpath("//div[@class='thumbnail']/div/b", $count);
    $deal->desc_long = $this->_xpath("", $count);
    $deal->pictures = $this->_xpath("//div[@class='thumbnail']/a/img/@src", $count);
    $deal->shipping = $this->_xpath("");
  }
}

?>

