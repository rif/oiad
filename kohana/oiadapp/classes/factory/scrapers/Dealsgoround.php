<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.dealsgoround.com/", new Dealsgoround());

class Dealsgoround extends AbstractMultipleScrapper {
    protected function _getDealIterator() {
    return "//div[@class='overview']/img/@src";
  }

  protected function _fillMultipleDetails($deal, $page, $count){
    $deal->item_link = "http://www.dealsgoround.com".$this->_xpath("//div[@class='overview']/h3/a/@href", $count);
    $deal->desc_short = $this->_xpath("//div[@class='overview']/h3/a", $count);
    $deal->price = str_replace('PRICE','',$this->_xpath("//div[@class='price']", $count));
    $deal->desc_long = $this->_xpath("//div[@class='breakdown']/dl", $count);
    $deal->pictures = "http://www.dealsgoround.com".$this->_xpath("//div[@class='overview']/img/@src", $count);
    $deal->shipping = $this->_xpath("", $count);
  }
}

?>

