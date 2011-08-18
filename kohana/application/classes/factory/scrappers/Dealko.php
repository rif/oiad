<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.dealko.com/sale", new Dealko());

class Dealko extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//div[@id='SaleTagPanel']/div[1]");
        	$deal->price = $this->_xpath("//div[@id='SaleTagPanel']/div[1]/span[1]");
        	$deal->desc_long = $this->_xpath("");
        	$deal->pictures = $this->_xpath("//tr[@class='productCel']/td[1]/div/div[2]/center/a/img/@src");
        	$deal->shipping = $this->_xpath("//div[@id='SaleTagPanel']/div[1]/span[2]");
    }
}

?>

