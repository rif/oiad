<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://invicta.chronoshark.com/", new Invictashark());

class Invictashark extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//div[@id='rightcol']/h2");
        	$deal->price = $this->_xpath("//div[@class='cost']");
        	$deal->desc_long = $this->_xpath("//div[@id='rightcol']/p");
        	$deal->pictures = $this->_get_host($host).$this->_xpath("//div[@id='__main4']/a/img/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>

