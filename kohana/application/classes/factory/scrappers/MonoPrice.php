<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.monoprice.com/home/index.asp", new MonoPrice());

class MonoPrice extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
	 		$deal->item_link = $this->_xpath("//a[contains(@title,'View detail information')]/@href");
        	$deal->desc_short = $this->_xpath("//a[contains(@title,'View detail information')]");
        	$deal->price = $this->_xpath("//font[@color='#CC0000']");
        	$deal->desc_long = $this->_xpath("//a[contains(@title,'View detail information')]/@href");
        	$deal->pictures = $this->_xpath("//img[@class='img']/@src");
        	$deal->shipping = $this->_xpath("//td[@class='black11px']");
    }
}

?>

