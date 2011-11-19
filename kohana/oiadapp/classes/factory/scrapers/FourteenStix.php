<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.14stix.com/", new FourteenStix());

class FourteenStix extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//div[@class='title']");
        	$deal->price = $this->_xpath("//div[@class='price']");
        	$deal->desc_long = $this->_xpath("//div[@class='content-sub']");
        	$deal->pictures = $host.$this->_xpath("//div[@id='product_images']/img/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>

