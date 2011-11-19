<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.froobi.com/watch-1.html", new FroobiWatch());

class FroobiWatch extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//h1[@class='perfume_heading']");
        	$deal->price = $this->_xpath("//span[@class='price']");
        	$deal->desc_long = $this->_xpath("//div[@class='middle_contant_area']/p[2]");
        	$deal->pictures = $this->_xpath("//img[@id='largeDivImage_1']/@src");
        	$deal->shipping = $this->_xpath("//span[@class='shiping_text']");
    }
}

?>

