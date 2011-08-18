<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("https://www.camofire.com/", new Camofire());

class Camofire extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//div[@id='contentLeft']/h1");
        	$deal->price = $this->_xpath("//div[@id='productInfoBox']/div[@id='left']/div[@class='txtTitleOrange']");
        	$deal->desc_long = $this->_xpath("//div[@id='contentLeft']/div[5]");
        	$deal->pictures = $host.$this->_xpath("//div[@id='mainProduct']/img/@src");
        	$deal->shipping = $this->_xpath("//div[@id='bottomLinks']/a[4]/@href");
    }
}

?>

