<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.meritline.com/dailydeals.aspx", new Meritline());

class Meritline extends AbstractScrapper {

  protected function _getDealIterator() {
    return "//img[contains(@src,'/product')]/@src";
  }

  protected function _fillMultipleDetails($deal, $page, $count){
  	$host = $this->_get_host($page);
    $deal->item_link = $host.$this->_xpath("//table[@class='productListing']//a[contains(.,'(More Details)')]/@href", $count);
    $deal->desc_short = $this->_xpath("//table[@class='productListing']//span[@itemprop='name']", $count);
    $deal->price = $this->_xpath("//td[@class='BigPriceOrgRed']/span", $count);
    $deal->desc_long = $this->_xpath("", $count);
    $deal->pictures = $host.$this->_xpath("//img[contains(@src,'/product')]/@src", $count);
    $deal->shipping = $this->_xpath("", $count);
  }
}

?>

