<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.redtagsports.com/", new RedTagSports());

class RedTagSports extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//div[@id='rightcolumn']/h1");
        	$deal->price = $this->_xpath("//h1[@id='price']");
        	$deal->desc_long = $this->_xpath("//div[@id='contenthold']");
        	$deal->pictures = $this->_xpath("//img[@name='targetimage']/@src");
        	$deal->shipping = $this->_xpath("//div[@id='shipping']/a/@href");
    }
}

?>

