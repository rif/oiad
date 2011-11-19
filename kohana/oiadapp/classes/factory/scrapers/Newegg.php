<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.newegg.com/Special/ShellShocker.aspx", new Newegg());

class Newegg extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
	 		$deal->item_link = $this->_xpath("//a[@id='shellShockerViewDetails']/@href");
        	$deal->desc_short = $this->_xpath("//a[@id='shellShockerViewDetails']/h1");
        	$deal->price = $this->_xpath("//div[@id='singleFinalPrice']");
        	$deal->desc_long = $this->_xpath("//a[@id='shellShockerViewDetails']/@href");
        	$deal->pictures = $this->_xpath("//img[@id='mainSlide_009N-000F-00003']/@src");
        	$deal->shipping = $this->_xpath("//ul[@id='pclaAddInfo_09N-000F-00003']/li[2]");
    }
}

?>

