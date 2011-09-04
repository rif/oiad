<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.bestdealmagazines.com/deal.asp", new BestDealMagazines());

class BestDealMagazines extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("/html/body/table/tbody/tr/td/table[2]/tbody/tr/td[2]/table[2]/tbody/tr/td/div/font/b");
        	$deal->price = $this->_xpath("//span[@id='spnPrice']");
        	$deal->desc_long = $this->_xpath("//font[@size='-1'][1]");
        	$deal->pictures = $this->_get_host($host).$this->_xpath("//img[@height='175']/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>

