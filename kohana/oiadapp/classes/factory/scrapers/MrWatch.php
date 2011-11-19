<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.mrwatch.com/Hot_Deal_of_the_Day-6_sale.html", new MrWatch());

class MrWatch extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
	 		$deal->item_link = $this->_get_host($host).$this->_xpath("///h4/a/@href");
        	$deal->desc_short = $this->_xpath("///h4/a");
        	$deal->price = $this->_xpath("//h6");
        	$deal->desc_long = $this->_xpath("");
        	$deal->pictures = $this->_get_host($host).$this->_xpath("//div[@class='watch_holder_container left']/a/img/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>

