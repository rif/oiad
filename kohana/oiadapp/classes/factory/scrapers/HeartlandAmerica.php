<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.heartlandamerica.com/browse/deal_of_day.asp", new HeartlandAmerica());

class HeartlandAmerica extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//span[@class='dod_title']");
        	$deal->price = $this->_xpath("//div[@id='priceblock']/img/@src");
        	$deal->desc_long = $this->_xpath("//div[@id='description']");
        	$deal->pictures = $this->_xpath("//img[@id='Product']/@src");
        	$deal->shipping = $this->_xpath("//div[@id='footer']/div");
    }
}

?>

