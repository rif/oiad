<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.copyfaxdeals.com/", new CopyFaxDeals());

class CopyFaxDeals extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
	 	$deal->site_name = "Copy Fax Deals";
        	$deal->desc_short = $this->_xpath("//div[@class='ptitle']");
        	$deal->price = $this->_xpath("//font[@class='pprice']");
        	$deal->desc_long = $this->_xpath("//td[@class='descrip']/p[2]/font");
        	$deal->pictures = $host.$this->_xpath("//td[@class='descrip']//img[@width='300']/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>
