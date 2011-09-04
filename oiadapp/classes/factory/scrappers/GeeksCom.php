<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.geeks.com/one-day-deal/", new GeeksCom());

class GeeksCom extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//td[@class='productdetheader']");
        	$deal->price = $this->_xpath("//td[@class='checkoutprice']/font/b");
        	$deal->desc_long = $this->_xpath("//td[@class='txt11px']/ul");
        	$deal->pictures = $this->_get_host($host).$this->_xpath("//img[@width='300']/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>

