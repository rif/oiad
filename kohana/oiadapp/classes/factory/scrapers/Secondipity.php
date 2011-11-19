<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.secondipity.com/info/dotd", new Secondipity());

class Secondipity extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//a[@id='dotd_titleLink']");
        	$deal->price = $this->_xpath("//dd[@id='dotd_price']");
        	$deal->desc_long = $this->_xpath("//p[@id='dotd_description']");
        	$deal->pictures = $this->_xpath("//img[@class='productImage']/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>

