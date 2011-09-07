<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.whey2buy.com/", new Whey2Buy());

class Whey2Buy extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//div[@class='c4']/span[@class='c3']");
        	$deal->price = $this->_xpath("//span[@class='c7']/span[@class='c3']");
        	$deal->desc_long = $this->_xpath("//div[@class='middle']/table[2]//b");
        	$deal->pictures = $this->_xpath("//div[@class='c6']/img/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>

