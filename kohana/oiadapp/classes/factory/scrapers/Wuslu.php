<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.wuslu.com/", new Wuslu());

class Wuslu extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//p[@class='head-txt']");
        	$deal->price = $this->_xpath("//div[@class='content-area']/div[5]/p[3]");
        	$deal->desc_long = $this->_xpath("//div[@class='main-bottom-area-bg']//ul");
        	$deal->pictures = $host.$this->_xpath("//img[@width='335']/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>

