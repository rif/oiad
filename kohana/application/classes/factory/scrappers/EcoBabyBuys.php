<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("https://www.ecobabybuys.com/", new EcoBabyBuys());

class EcoBabyBuys extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
	 	$deal->site_name = "Eco Baby Buys";
        	$deal->desc_short = $this->_xpath("//div[@class='brandname']");
        	$deal->price = $this->_xpath("//div[@class='price']");
        	$deal->desc_long = $this->_xpath("//div[@class='homelinks']/span/a/@href");
        	$deal->pictures = $this->_xpath("///img[@title='View Details']/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>
