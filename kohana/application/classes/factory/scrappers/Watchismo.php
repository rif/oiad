<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.watchismo.com/", new Watchismo());

class Watchismo extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
	 		$deal->item_link = $host.$this->_xpath("//div[@class='featured-products-item']/a/@href");
        	$deal->desc_short = $this->_xpath("//div[@class='featured-products-item']/a");
        	$deal->price = $this->_xpath("//div[@class='featured-products-item-price']");
        	$deal->desc_long = $this->_xpath("");
        	$deal->pictures = $host.$this->_xpath("//div[@class='featured-products-item-img']/a/img/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>

