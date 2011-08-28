<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.golfdiscount.com/deal_of_the_day", new GolfDiscount());

class GolfDiscount extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
	 		$deal->item_link = $this->_xpath("//div[@class='ptitle-wrap']/h3/a/@href");
        	$deal->desc_short = $this->_xpath("//div[@class='ptitle-wrap']/h3/a");
        	$deal->price = $this->_xpath("//span[@class='money']");
        	$deal->desc_long = $this->_xpath("");
        	$deal->pictures = $this->_xpath("//img[@id='product_image_70458']/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>

