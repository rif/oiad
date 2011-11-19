<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.abazias.com/dealoftheday.asp", new Abazias());

class Abazias extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//div[@id='today_deal']/div[@id='copy_left']/h2");
        	$deal->price = $this->_xpath("//div[@id='today_price']/span[@id='price_line']");
        	$deal->desc_long = $this->_xpath("//div[@id='today_deal']/div[@id='copy_left']/p[1]");
        	$deal->pictures = $this->_xpath("");
        	$deal->shipping = $this->_xpath("");
    }
}

?>

