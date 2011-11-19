<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://shop.pacsun.com/content.jsp?pageName=sale", new PacsunWomens());

class PacsunWomens extends AbstractMultipleScraper {

  protected function _getDealIterator() {
    return "//div[@class='dealIMG']/img/@src";
  }

  protected function _fillMultipleDetails($deal, $page, $count){
    $deal->item_link = $this->_xpath("//div[@class='dealContainer']/@href", $count);
    $deal->desc_short = $this->_xpath("//li[@class='prod']", $count);
    $deal->price = $this->_xpath("//li[@class='price']", $count);
    $deal->desc_long = $this->_xpath("//li[@class='prodDetail']", $count);
    $deal->pictures = $this->_xpath("//div[@class='dealIMG']/img/@src", $count);
    $deal->shipping = $this->_xpath("", $count);
  }
}

?>

