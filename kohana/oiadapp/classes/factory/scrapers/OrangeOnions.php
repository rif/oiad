<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.orangeonions.com/category/peel_of_the_day/", new OrangeOnions());

class OrangeOnions extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//td[@class='ztxt']/h1");
        	$deal->price = $this->_xpath("//div[@class='ztitle']/span");
        	$deal->desc_long = $this->_xpath("//div[@id='prodDescElement']");
        	$deal->pictures = $this->_xpath("//img[@height='350']/@src");
        	$deal->shipping = $this->_xpath("//div[@class='footlinks']/a[3]/@href");
    }
}

?>

