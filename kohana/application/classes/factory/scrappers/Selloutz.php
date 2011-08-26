<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("https://www.selloutz.com", new Selloutz());

class Selloutz extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//div[@id='vmMainPage']//h1");
        	$deal->price = $this->_xpath("//span[@id='pricechange']");
        	$deal->desc_long = $this->_xpath("//div[@id='vmMainPage']//td/span");
        	$deal->pictures = $this->_xpath("//img[@id='bigmain']/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>

