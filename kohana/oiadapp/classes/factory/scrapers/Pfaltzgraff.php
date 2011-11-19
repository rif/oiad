<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.pfaltzgraff.com/", new Pfaltzgraff());

class Pfaltzgraff extends AbstractScraper {

	protected function _getPageToScrap($page) {
    	return $this->_xpath("//div[@class='banner dotd']/a/@href");
  	}

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//div[@class='headerText']/h1");
        	$deal->price = $this->_xpath("//div[@class='special']/span[@class='value']");
        	$deal->desc_long = $this->_xpath("//div[@id='Description']/p");
        	$deal->pictures = $this->_xpath("//div[@class='fluid-display']/img/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>

