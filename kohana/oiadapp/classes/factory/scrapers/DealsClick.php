<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.dealsclick.com/", new DealsClick());

class DealsClick extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//span[@id='ctl00_ContentPlaceHolder1_lblModel']");
        	$deal->price = $this->_xpath("//span[@id='ctl00_ContentPlaceHolder1_lblPrice']");
        	$deal->desc_long = $this->_xpath("//span[@id='ctl00_ContentPlaceHolder1_lblDeals']/p[1]/font");
        	$deal->pictures = $host.$this->_xpath("//a[@id='ctl00_ContentPlaceHolder1_HlinkImage']/img/@src");
        	$deal->shipping = $this->_xpath("//span[@class='smallshipping']/strong");
    }
}

?>

