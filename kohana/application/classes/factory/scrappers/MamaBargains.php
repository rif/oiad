<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.mamabargains.com/", new MamaBargains());

class MamaBargains extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//div[@class='headline']");
        	$deal->price = $this->_xpath("//span[@class='price']");
        	$deal->desc_long = $this->_xpath("//div[@class='left']");
        	$deal->pictures = $this->_xpath("//img[@id='productShot']/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>

