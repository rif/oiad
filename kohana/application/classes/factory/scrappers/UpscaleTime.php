<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.upscaletime.com/", new UpscaleTime());

class UpscaleTime extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
	 		$deal->item_link = $host.$this->_xpath("//div[@class='featured-products-item'][1]/a/@href");
        	$deal->desc_short = $this->_xpath("//div[@class='featured-products-item'][1]/a");
        	$deal->price = $this->_xpath("//div[@class='featured-products-item-price']");
        	$deal->desc_long = $this->_xpath("");
        	$deal->pictures = $this->_xpath("//div[@class='featured-products-item-img']/a/img/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>

