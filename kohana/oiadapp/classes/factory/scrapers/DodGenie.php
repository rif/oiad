<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.dodgenie.com", new DodGenie());

class DodGenie extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//h1[@id='productName']");
        	$deal->price = $this->_xpath("//h2[@id='productPrices']");
        	$deal->desc_long = $this->_xpath("//span[@class='MsoNormal']/span/font");
        	$deal->pictures = $this->_get_host($host).$this->_xpath("//div[@id='productMainImage']//img/@src");
        	$deal->shipping = $this->_xpath("//div[@id='shipping']");
    }
}

?>

