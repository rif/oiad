<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.thingfling.com/", new ThingFling());

class ThingFling extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//span[@class='title']");
        	$deal->price = $this->_xpath("//span[@class='price']");
        	$deal->desc_long = $this->_xpath("//div[@class='description']");
        	$deal->pictures = $this->_xpath("//img[@id='ActualImage']/@src");
        	$deal->shipping = $this->_xpath("//span[@class='shipping']");
    }
}

?>

