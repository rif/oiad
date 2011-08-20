<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://morebeer.com/", new MoreBeer());

class MoreBeer extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//div[@class='dod-container']//td[2]/b[1]");
        	$deal->price = $this->_xpath("//div[@class='dod-container']//font[2]");
        	$deal->desc_long = $this->_xpath("");
        	$deal->pictures = $host.$this->_xpath("//div[@class='dod-container']//img/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>

