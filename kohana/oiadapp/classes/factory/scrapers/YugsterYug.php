<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.yugster.com/dspYoursUntilGone.aspx", new YugsterYug());

class YugsterYug extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//span[@id='ctl00_cphMainBody_ucProdView_lblOfferTitle']");
        	$deal->price = $this->_xpath("//span[@id='ctl00_cphMainBody_ucProdView_lblYugsterPrice']");
        	$deal->desc_long = $this->_xpath("//span[@id='ctl00_cphMainBody_ucProdView_lblProductInformation']");
        	$deal->pictures = $this->_get_host($host).$this->_xpath("//img[@id='ctl00_cphMainBody_ucProdView_imgProductimage']/@src");
        	$deal->shipping = $this->_xpath("//div[@id='divProdDescripSection']");
    }
}

?>

