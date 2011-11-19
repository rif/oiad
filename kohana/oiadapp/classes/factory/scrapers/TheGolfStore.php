<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.thegolfstoreonline.com/t-dealoftheday.aspx", new TheGolfStore());

class TheGolfStore extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//p[@id='dotdName']/a");
        	$deal->price = $this->_xpath("//p[@id='dotdPrice']");
        	$deal->desc_long = $this->_xpath("//div[@id='dotdBottomRight']/ul");
        	$deal->pictures = $this->_get_host($host).$this->_xpath("///img[@id='ProductPic2008']/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>

