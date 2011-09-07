<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.teediculous.com/", new Teediculous());

class Teediculous extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//div[@class='td-left_content'][1]/h1");
        	$deal->price = $this->_xpath("//div[@class='td-left_content'][1]/p[1]/b");
        	$deal->desc_long = $this->_xpath("//div[@class='td-left_content'][1]/p[2]");
        	$deal->pictures = $host.$this->_xpath("//div[@class='td-center']/a/img/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>

