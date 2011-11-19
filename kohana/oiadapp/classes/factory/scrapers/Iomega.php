<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://go.iomega.com/en-us/offer/deal-of-day/", new Iomega());

class Iomega extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//div[@id='dealDay']//td[@style='padding-top:10px;']");
        	$deal->price = $this->_xpath("//span[@class='price']");
        	$deal->desc_long = $this->_xpath("//div[@id='overview']");
        	$deal->pictures = $this->_xpath("//div[@id='dealDay']//img/@src");
        	$deal->shipping = $this->_xpath("//div[@id='dealDay']/h2");
    }
}

?>

