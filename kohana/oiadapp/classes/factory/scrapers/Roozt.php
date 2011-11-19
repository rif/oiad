<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.roozt.com/", new Roozt());

class Roozt extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//td[@class='deal_title']");
        	$deal->price = $this->_xpath("//td[@class='deal_prc']/div[1]");
        	$deal->desc_long = $this->_xpath("//td[@class='deal_comp_padd']");
        	$deal->pictures = $host.$this->_xpath("//td[@class='deal_comp_padd']/p[1]/img/@src");
        	$deal->shipping = $this->_xpath("//td[@class='deal_comp_padd']/div/div[28]/span/span");
    }
}

?>

