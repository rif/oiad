<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.givemejewels.com/", new GiveMeJewels());

class GiveMeJewels extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//td[@width='33%']/font/b");
        	$deal->price = $this->_xpath("//b[contains(.,'$')]");
        	$deal->desc_long = $this->_xpath("//td[@width='33%']/font/b/following::p");
        	$deal->pictures = $host.$this->_xpath("//img[contains(@src,'dodthumb')]/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>

