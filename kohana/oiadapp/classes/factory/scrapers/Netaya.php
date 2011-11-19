<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://deal.netaya.com/", new Netaya());

class Netaya extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//div[@class='item_banner']/p");
        	$deal->price = $this->_xpath("//p[@class='price']");
        	$deal->desc_long = $this->_xpath("//div[@class='item_description']");
        	$deal->pictures = $this->_xpath("//span[@id='enlarge1']/a/@href");
        	$deal->shipping = $this->_xpath("");
    }
}

?>

