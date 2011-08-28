<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.tfaw.com/dod/", new ThingsFromAnotherWorld());

class ThingsFromAnotherWorld extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//div[@class='dod-title']");
        	$deal->price = $this->_xpath("//span[@class='dod-now']");
        	$deal->desc_long = $this->_xpath("//span[@class='dod-description']");
        	$deal->pictures = $this->_xpath("//img[@class='cover-image']/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>

