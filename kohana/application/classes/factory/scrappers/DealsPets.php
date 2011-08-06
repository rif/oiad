<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://pets.13deals.com/", new DealsPets());

class DealsPets extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
	 	$deal->site_name = "13 Deals Pets";
        	$deal->desc_short = $this->_xpath("//p[@class='prodheader']");
        	$deal->price = $this->_xpath("//p[@class='lrgorange']");
        	$deal->desc_long = $this->_xpath("//td[@width='810']/p[2]");
        	$deal->pictures = $host.$this->_xpath("//td[@align='center']/img/@src");
        	$deal->shipping = $this->_xpath("//p[@class='lrgorange']/span[@class='drkblue']");
    }
}

?>
