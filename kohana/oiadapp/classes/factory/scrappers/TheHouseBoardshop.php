<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.the-house.com/dealoftheday.html", new TheHouseBoardshop());

class TheHouseBoardshop extends AbstractScrapper {

  protected function _getDealIterator() {
    return "//table[@class='category-product-table']//img[@width='110']/@src";
  }

  protected function _fillMultipleDetails($deal, $page, $count){
  	$host = $this->_get_host($page);
    $deal->item_link = $host.$this->_xpath("//td[@class='cattextreg']/a[1]/@href", $count);
    $deal->desc_short = $this->_xpath("//span[@class='displayname']", $count);
    $deal->price = $this->_xpath("//span[@class='ourprice']", $count);
    $deal->desc_long = $this->_xpath("//td[@class='cattextreg']/p", $count);
    $deal->pictures = $this->_xpath("//table[@class='category-product-table']//img[@width='110']/@src", $count);
    $deal->shipping = $this->_xpath("//div[@id='stripe']/span[@class='left']");
  }
}

?>

