<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://deal.pulsetv.com/", new Pulsetv());

class Pulsetv extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//span[@id='rptContent_ctl00_objProdInfo_lblTitle']");
        	$deal->price = $this->_xpath("//span[@id='rptContent_ctl00_objProdInfo_lblOurPrice']");
        	$deal->desc_long = $this->_xpath("//div[@id='rptContent_ctl00_objProdInfo_pnlDescription']");
        	$deal->pictures = $this->_xpath("//img[@id='rptContent_ctl00_objProdInfo_imgImage']/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>

