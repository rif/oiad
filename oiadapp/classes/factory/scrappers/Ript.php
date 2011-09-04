<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://riptapparel.com/", new Ript());

class Ript extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//h1[@class='heading']/a");
        	$deal->price = $this->_xpath("");
        	$deal->desc_long = $this->_xpath("//div[@class='bio']/p[1]");
        	$deal->pictures = $this->_xpath("//a[@rel='facebox']/@href");
        	$deal->shipping = $this->_xpath("");
    }
}

?>

