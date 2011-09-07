<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://sale.summitonline.com/", new SummitOnline());

class SummitOnline extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
	 	$deal->item_link = $this->_xpath("//div[@id='clearanceMainItem']/h2/a/@href");
        	$deal->desc_short = $this->_xpath("//div[@id='clearanceMainItem']/h2/a");
        	$deal->price = $this->_xpath("//div[@id='clearanceMainItem']/h1");
        	$deal->desc_long = $this->_xpath("//div[@id='clearanceMainItem']/p");
        	$deal->pictures = $this->_xpath("//div[@id='clearanceMainItem']/a/img/@src");
        	$deal->shipping = $this->_xpath("//div[@class='headerFreeShippingContainer']");
    }
}

?>

