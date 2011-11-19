<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://sale.summitonline.com/", new SummitOnline());

class SummitOnline extends AbstractMultipleScraper {

	protected function _getDealIterator() {
    return "//img[@class='topTenCarouselImage']/@src";
  }

  protected function _fillMultipleDetails($deal, $page, $count){
    $deal->item_link = $page.$this->_xpath("//ul[@id='bestSellerCarousel']//h3/a/@href", $count);
    $deal->desc_short = $this->_xpath("//ul[@id='bestSellerCarousel']//h3/a", $count);
    $deal->price = $this->_xpath("//span[@class='priceSale']", $count);
    $deal->desc_long = $this->_xpath("", $count);
    $deal->pictures = $this->_xpath("//img[@class='topTenCarouselImage']/@src", $count);
    $deal->shipping = $this->_xpath("", $count);
  }
}

?>

