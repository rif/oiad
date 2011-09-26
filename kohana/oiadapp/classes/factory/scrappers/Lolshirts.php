<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.lolshirts.com/", new Lolshirts());

class Lolshirts extends AbstractScrapper {

	protected function _getPageToScrap($page) {
      return $this->_xpath("//li[@id='feature-0']/a/@href");
    }

	protected function _fillDetails($deal, $host){
    	$deal->desc_short = $this->_xpath("//div[@class='description']/h1");        	
    	$deal->price = $this->_xpath("//p[@class='price']");
    	$deal->desc_long = $this->_xpath("//div[@class='description']/p");
    	$deal->pictures = $this->_xpath("//div[@id='image-0']/img/@src");
    	$deal->shipping = $this->_xpath("");
    }
}

?>

