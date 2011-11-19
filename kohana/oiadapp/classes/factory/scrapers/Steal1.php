<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.steal1.com/", new Steal1());

class Steal1 extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//div[@class='dealinfo']/h2");
        	$deal->price = $this->_xpath("//div[@class='price']");
        	$deal->desc_long = $this->_xpath("//div[@class='descboxmain']");
        	$deal->pictures = $host.$this->_xpath("//img[@id='imagemain']/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>

