<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.szul.com/szd", new Szul());

class Szul extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//span[@id='ctl00_ctl00_mContents_mainContent_lblTitle']");
        	$deal->price = '$'.$this->_xpath("//span[@id='ctl00_ctl00_mContents_mainContent_lblDiscounted']");
        	$deal->desc_long = $this->_xpath("//span[@id='ctl00_ctl00_mContents_mainContent_lblDesc']");
        	$deal->pictures = $this->_get_host($host).$this->_xpath("//img[@id='imgmainin']/@src");
        	$deal->shipping = $this->_xpath("//div[@class='box-outline'][1]/p[3]");
    }
}

?>

