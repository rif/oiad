<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.orangeonions.com/category/peel_of_the_day/", new OrangeOnions());

class OrangeOnions extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//td[@class='ztxt']/h1");
        	$deal->price = $this->_xpath("//div[@class='ztitle']/span");
        	$deal->desc_long = $this->_xpath("//div[@id='prodDescElement']");
        	$deal->pictures = $this->_xpath("//img[@height='350']/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>

