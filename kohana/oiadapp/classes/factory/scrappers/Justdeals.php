<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.justdeals.com/", new Justdeals());

class Justdeals extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//div[@id='product-title']");
        	$deal->price = $this->_xpath("//span[@class='price-amount']");
        	$deal->desc_long = $this->_xpath("//div[@id='description-teaser']/p");
        	$deal->pictures = $this->_xpath("//div[@class='galleria_wrapper']/img/@src");
        	$deal->shipping = $this->_xpath("//div[@class='product-description']/div");
    }
}

?>

