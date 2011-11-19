<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.1daysports.com/", new DaySports());

class DaySports extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("/html/body/div[@id='main']/div[@id='content']/div[@id='title']");
        	$deal->price = $this->_xpath("/html/body/div[@id='main']/div[@id='content']/div[@id='price']");
        	$deal->desc_long = $this->_xpath("/html/body/div[@id='main']/div[@id='content']/div[@id='description']");
        	$deal->pictures = $this->_xpath("//div[@id='image']/img[@class='imgsize']/@src");
        	$deal->shipping = '';
    }
}

?>

