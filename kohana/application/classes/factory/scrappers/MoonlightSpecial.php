<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.moonlightspecial.com/", new MoonlightSpecial());

class MoonlightSpecial extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//span[@class='ProductTitle']");
        	$deal->price = $this->_xpath("//span[@class='ProductPrice']");
        	$deal->desc_long = $this->_xpath("//div[@id='ProductDetail']");
        	$deal->pictures = $this->_xpath("//a[contains(@class, 'zoom')]/img/@src");
        	$deal->shipping = $this->_xpath("//span[@class='ProductShipping']");
    }
}

?>

