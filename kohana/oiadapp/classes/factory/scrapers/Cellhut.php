<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.cellhut.com/", new Cellhut());

class Cellhut extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("");
        	$deal->price = $this->_xpath("");
        	$deal->desc_long = $this->_xpath("");
        	$deal->pictures = $this->_xpath("//img[@class='hoverZoomLink']/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>

