<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.organize.com/", new OrganizeCom());

class OrganizeCom extends AbstractMultipleScraper {

  protected function _getDealIterator() {
    return "//div[@id='switchNew']//a/img/@src";
  }

  protected function _fillMultipleDetails($deal, $page, $count){
    $deal->item_link = $page.$this->_xpath("//div[@id='switchNew']//div[@class='name']/a/@href", $count);
    $deal->desc_short = $this->_xpath("//div[@id='switchNew']//div[@class='name']/a", $count);
    $deal->price = $this->_xpath("//div[@id='switchNew']//div[@class='price']", $count);
    $deal->desc_long = $this->_xpath("", $count);
    $deal->pictures = $this->_xpath("//div[@id='switchNew']//a/img/@src", $count);
    $deal->shipping = $this->_xpath("", $count);
  }
}

?>

