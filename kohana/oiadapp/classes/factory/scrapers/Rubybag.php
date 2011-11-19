<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.rubybag.com/", new Rubybag());

class Rubybag extends AbstractScraper {

	protected function _getPageToScrap($page) {
    	return "http://www.rubybag.com".$this->_xpath("//a[contains(.,'Deal of the Day')]/@href");
  	}

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//h2[@class='itemheader']");
        	$deal->price = $this->_xpath("//span[@class='sale']");
        	$deal->desc_long = $this->_xpath("//span[@class='description']");
        	$deal->pictures = "http://www.rubybag.com".$this->_xpath("//img[@id='product_image']/@src");
        	$deal->shipping = $this->_xpath("//div[@class='tabscontain']/div[3]");
    }
}

?>

