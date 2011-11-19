<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.sportsmansgeardaily.com/", new SportsmansDeal());

class SportsmansDeal extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//div[@class='productName']");
        	$deal->price = $this->_xpath("//div/font");
        	$deal->desc_long = $this->_xpath("//div[@style='margin: 0 0 0 35px; width: 830px; clear: both;']");
        	$deal->pictures = $host.$this->_xpath("//div/img/@src");
        	$deal->shipping = $this->_xpath("//div/font[2]");
    }
}

?>

