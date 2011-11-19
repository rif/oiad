<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("https://www.ecobabybuys.com/", new EcoBabyBuys());

class EcoBabyBuys extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//div[@class='brandname']");
        	$deal->price = $this->_xpath("//div[@class='price']");
        	$deal->desc_long = $this->_xpath("//div[@class='homelinks']/span/a/@href");
        	$deal->pictures = $this->_xpath("///img[@title='View Details']/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>

