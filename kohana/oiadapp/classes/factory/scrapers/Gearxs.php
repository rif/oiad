<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.gearxs.com/store/", new Gearxs());

class Gearxs extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("");
        	$deal->price = $this->_xpath("");
        	$deal->desc_long = $this->_xpath("");
        	$deal->pictures = $this->_xpath("//img[@usemap='#FPMap0']/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>

