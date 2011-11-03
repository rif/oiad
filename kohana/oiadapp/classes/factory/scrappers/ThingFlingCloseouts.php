<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://closeout.thingfling.com/", new ThingFlingCloseouts());

class ThingFlingCloseouts extends AbstractMultipleScrapper {

  protected function _getDealIterator() {
    return "//img[@style='border: 1px solid #666666;']/@src";
  }

  protected function _fillMultipleDetails($deal, $page, $count){
    $deal->item_link = $page.$this->_xpath("//a[@class='DetailLink']/@href", $count);
    $deal->desc_short = $this->_xpath("//a[@class='DetailLink']", $count);
    $deal->price = $this->_xpath("//div[@id='priceCart']/p", $count);
    $deal->desc_long = $this->_xpath("//table[@class='CatalogContainerDisplay']/tbody/tr[2]/td[2]", $count);
    $deal->pictures = $this->_xpath("//img[@style='border: 1px solid #666666;']/@src", $count);
    $deal->shipping = $this->_xpath("", $count);
  }
}

?>

