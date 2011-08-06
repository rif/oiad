<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.ballisticreload.com/", new BallisticReload());

class BallisticReload extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
	 	$deal->site_name = "Ballistic Reload";
        	$deal->desc_short = $this->_xpath("//span[@class='dealTitle']");
        	$deal->price = $this->_xpath("//div[@class='dealBrandPrice']");
        	$deal->desc_long = $this->_xpath("//div[@id='dealDescription']");
        	$deal->pictures = $this->_xpath("//img[@id='dealLargeImage']/@src");
        	$deal->shipping = $this->_xpath("//div[@id='dealShipOptions']");
    }
}

?>
