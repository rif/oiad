<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.scrappindealsnsteals.com/Todays-Daily-Deal_c_8.html", new ScrappinDealsNSteals());

class ScrappinDealsNSteals extends AbstractScrapper {

  protected function _getDealIterator() {
    return "//img[contains(@id,'qv_')]/@src";
  }

  protected function _fillMultipleDetails($deal, $page, $count){
  	$host = $this->_get_host($page);
    $deal->item_link = $host.$this->_xpath("//table[@class='alternative']//td[@class='item']/a/@href", $count);
    $deal->desc_short = $this->_xpath("//table[@class='alternative']//td[@class='item']/a", $count);
    $deal->price = $this->_xpath("", $count);
    $deal->desc_long = $this->_xpath("//td[@class='price2']", $count);
    $deal->pictures = $host.$this->_xpath("//img[contains(@id,'qv_')]/@src", $count);
    $deal->shipping = $this->_xpath("", $count);
  }
}

?>

