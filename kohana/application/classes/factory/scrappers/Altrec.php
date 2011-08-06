<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://outlet.altrec.com/", new Altrec());

class Altrec extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
	 	$deal->site_name = "Altrec";
        	$deal->desc_short = $this->_xpath("//div[@id='detailMain']/h1[@class='detailBH1']");
        	$deal->price = $this->_xpath("//span[@class='salePrice']");
        	$deal->desc_long = $this->_xpath("");
        	$deal->pictures = $this->_xpath("//img[@id='swatchImage']/@src");
        	$deal->shipping = $this->_xpath("//ul[@id='shippingList']/li[@id='tempId_22']/a");
    }
}

?>
