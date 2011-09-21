<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://deals.mamapedia.com/", new Mamapedia());

class Mamapedia extends AbstractMultipleScrapper {
    protected function _getDealIterator() {
    return "//img[@class='deal_photo size388']/@src";
  }

  protected function _fillMultipleDetails($deal, $page, $count){
    $deal->item_link = "http://deals.mamapedia.com".$this->_xpath("//a[@class='link_overlay']/@href", $count);
    $deal->desc_short = $this->_xpath("//div[@class='short_headline']", $count)." ".$this->_xpath("//div[@class='headline']", $count);
    $deal->price = $this->_xpath("//li[@id='deal_price']");
    $deal->desc_long = $this->_xpath("//div[@class='see_more_snippet']");
    $deal->pictures = $this->_xpath("//img[@class='deal_photo size388']/@src", $count);
    $deal->shipping = $this->_xpath("");
  }
}

?>

