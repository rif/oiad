<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.inspiredsilver.com/deal-of-the-day.html", new InspiredSilver());

class InspiredSilver extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//div[@class='product-name']/h2");
        	$deal->price = $this->_xpath("//p[@id='price']");
        	$deal->desc_long = $this->_xpath("//div[@id='product-details']/p");
        	$deal->pictures = $this->_xpath("//img[@class='product-img']/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>

