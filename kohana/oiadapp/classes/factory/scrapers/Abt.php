<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.abt.com/", new Abt());

class Abt extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//div[@id='dotd_inner']");
        	$deal->price = $this->_xpath("//div[@id='dotd_price']");
        	$deal->desc_long = $this->_xpath("");
        	$deal->pictures = $this->_xpath("//img[@id='dotd_prod_img']/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>

