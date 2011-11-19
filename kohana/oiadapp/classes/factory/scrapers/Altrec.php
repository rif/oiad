<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://outlet.altrec.com/", new Altrec());

class Altrec extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//div[@id='detailMain']/h1[@class='detailBH1']");
        	$deal->price = $this->_xpath("//span[@class='salePrice']");
        	$deal->desc_long = $this->_xpath("");
        	$deal->pictures = $this->_xpath("//img[@id='swatchImage']/@src");
        	$deal->shipping = $this->_xpath("//ul[@id='shippingList']/li[@id='tempId_22']/a");
    }
}

?>

