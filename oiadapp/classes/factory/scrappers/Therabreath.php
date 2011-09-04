<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.therabreath.com/deal-of-the-day.asp", new Therabreath());

class Therabreath extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//div[@class='producttitle']");
        	$deal->price = $this->_xpath("//div[@class='productprice']/span");
        	$deal->desc_long = $this->_xpath("//div[@class='productdesc']");
        	$deal->pictures = $this->_get_host($host).$this->_xpath("//a[@rel='facebox']/img/@src");
        	$deal->shipping = $this->_xpath("//div[@class='maincontent']/div/div[6]");
    }
}

?>

