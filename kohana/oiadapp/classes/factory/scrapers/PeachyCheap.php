<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.peachycheap.com/", new PeachyCheap());

class PeachyCheap extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//div[@class='producttext']");
        	$deal->price = $this->_xpath("//h1[contains(.,'$')]");
        	$deal->desc_long = $this->_xpath("//span[@style='font-size: large']");
        	$deal->pictures = $host.$this->_xpath("//td[@class='leftside']/div[2]/img/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>

