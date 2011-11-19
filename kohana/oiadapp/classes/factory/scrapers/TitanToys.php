<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.titantoys.com/", new TitanToys());

class TitanToys extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//td[@class='star-product-title']");
        	$deal->price = $this->_xpath("//td[@class='star-product-price']");
        	$deal->desc_long = $this->_xpath("//td[@class='star-product']");
        	$deal->pictures = $host.$this->_xpath("//img[@width='120']/@src");
        	$deal->shipping = $host.$this->_xpath("//a[contains(.,'Shipping')]/@href");
    }
}

?>

