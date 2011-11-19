<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.tackoftheday.com/", new TackOfTheDay());

class TackOfTheDay extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
	 		$deal->item_link = $this->_xpath("//td[@id='tdTOTD']/p[2]/a/@href");
        	$deal->desc_short = $this->_xpath("//td[@id='tdTOTD']/p[2]/a");
        	$deal->price = $this->_xpath("");
        	$deal->desc_long = $this->_xpath("//td[@id='tdTOTD']/p[2]");
        	$deal->pictures = $host.$this->_xpath("//td[@id='tdTOTD']/p[2]/a/img/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>

