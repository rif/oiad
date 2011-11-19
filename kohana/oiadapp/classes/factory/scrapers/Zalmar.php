<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.zalmar.com/", new Zalmar());

class Zalmar extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
	 		$deal->item_link = $host.$this->_xpath("//td[@class='dod']/p/a/@href");
        	$deal->desc_short = $this->_xpath("//td[@class='dod']/p/a");
        	$deal->price = $this->_xpath("//font[contains(.,'$')]");
        	$deal->desc_long = $this->_xpath("");
        	$deal->pictures = $host.$this->_xpath("//p/a/img/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>

