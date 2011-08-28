<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.performancebike.com/", new PerformanceBicycle());

class PerformanceBicycle extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
	 		$deal->item_link = $host.$this->_xpath("//a[@title='Deal of the Day']/@href");
        	$deal->desc_short = $this->_xpath("");
        	$deal->price = $this->_xpath("");
        	$deal->desc_long = $this->_xpath("");
        	$deal->pictures = $this->_xpath("//a[@title='Deal of the Day']/img/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>

