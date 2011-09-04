<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.hartfordyork.com/category/daily-deal", new HartfordYork());

class HartfordYork extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
	 		$deal->item_link = $this->_get_host($host).$this->_xpath("//table[@class='cat-image']//a/@href");
        	$deal->desc_short = $this->_xpath("//table[@class='cat-image']//a");
        	$deal->price = $this->_xpath("//span[@class='price']");
        	$deal->desc_long = $this->_xpath("");
        	$deal->pictures = $this->_xpath("//table[@class='cat-image']//img/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>

