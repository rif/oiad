<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.eternalsnow.com/steal-of-the-day.html", new EternalSnow());

class EternalSnow extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
	 	$deal->site_name = "Eternal Snow";
        	$deal->desc_short = $this->_xpath("//h2[@class='product-name']/a");
        	$deal->price = $this->_xpath("//p[@class='special-price']/span");
        	$deal->desc_long = $this->_xpath("");
        	$deal->pictures = $this->_xpath("//li[@class='item first']/a/img/@src");
        	$deal->shipping = $this->_xpath("//div[@class='footer-links']/table[1]/tbody/tr/td[1]/ul/li[2]/a/@href");
    }
}

?>
