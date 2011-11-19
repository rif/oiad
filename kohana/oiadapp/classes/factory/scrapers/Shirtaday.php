<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.shirtaday.com/", new Shirtaday());

class Shirtaday extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//div[@id='shirt-title']/h1");
        	$deal->price = $this->_xpath("//li[@id='price-end']/span[2]");
        	$deal->desc_long = $this->_xpath("//p[@class='left']");
        	$deal->pictures = $this->_xpath("//div[@id='shirt-image']/img/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>

