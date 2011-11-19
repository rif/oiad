<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.redtagsports.com/", new RedTagSports());

class RedTagSports extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//div[@class='content_right']/h3");
        	$deal->price = $this->_xpath("//span[@class='rate']");
        	$deal->desc_long = $this->_xpath("//div[@id='content']");
        	$deal->pictures = $this->_xpath("//div[@class='content_left']/a/img/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>

