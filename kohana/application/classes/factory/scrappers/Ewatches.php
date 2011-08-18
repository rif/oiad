<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.ewatches.com/cust/dailydealsteal.asp?d=0", new Ewatches());

class Ewatches extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//font[@color='#3D3F42'][@size='2']");
        	$deal->price = $this->_xpath("//td[@class='details']/font/b/following::*");
        	$deal->desc_long = $this->_xpath("//td[@class='details']//td[@class='details']");
        	$deal->pictures = $this->_get_host($host).$this->_xpath("//div[@id='detailimage']/a/img/@src");
        	$deal->shipping = $this->_xpath("//a[@class='header2'][4]");
    }
}

?>

