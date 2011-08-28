<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://closeout.thingfling.com/", new ThingFlingCloseouts());

class ThingFlingCloseouts extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//span[@class='title']");
        	$deal->price = $this->_xpath("//span[@class='price']");
        	$deal->desc_long = $this->_xpath("");
        	$deal->pictures = $this->_xpath("//img[@id='ActualImage']/@src");
        	$deal->shipping = $this->_xpath("//span[@class='shipping']");
    }
}

?>

