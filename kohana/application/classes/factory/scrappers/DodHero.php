<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.dodhero.com", new DodHero());

class DodHero extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
	 	$deal->site_name = "DOD Hero";
        	$deal->desc_short = $this->_xpath("//h1[@id='productName']");
        	$deal->price = $this->_xpath("//h2[@id='productPrices']");
        	$deal->desc_long = $this->_xpath("//div[@id='productDescription']");
        	$deal->pictures = $this->_get_host($host).$this->_xpath("//img[@width='246']/@src");
        	$deal->shipping = $this->_xpath("//div[@id='productDescription']/h3/b/span");
    }
}

?>
