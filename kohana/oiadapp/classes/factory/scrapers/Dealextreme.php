<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.dealextreme.com/", new Dealextreme());

class Dealextreme extends AbstractMultipleScraper {

  protected function _getDealIterator() {
    return "//div[@class='gadgets_row']//img/@src";
  }

  protected function _fillMultipleDetails($deal, $page, $count){
    $deal->item_link = $page.$this->_xpath("//div[@class='gadgets_row']//dd[@class='tit']/a/@href", $count);
    $deal->desc_short = $this->_xpath("//div[@class='gadgets_row']//dd[@class='tit']/a", $count);
    $deal->price = $this->_xpath("//div[@class='gadgets_row']//strong", $count);
    $deal->desc_long = $this->_xpath("", $count);
    $deal->pictures = $this->_xpath("//div[@class='gadgets_row']//img/@src", $count);
    $deal->shipping = $this->_xpath("//div[@class='gadgets_row']//dd[@class='free_s']", $count);
  }
}

?>

