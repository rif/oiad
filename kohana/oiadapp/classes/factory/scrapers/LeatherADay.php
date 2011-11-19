<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.leatheraday.com/", new LeatherADay());

class LeatherADay extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//span[@class='brandD']");
        	$deal->price = $this->_xpath("//span[@class='priceg']");
        	$deal->desc_long = $this->_xpath("//table[@width='98%']");
        	$deal->pictures = $host.$this->_xpath("//a[@rel='lightbox'][1]/img/@src");
        	$deal->shipping = $this->_xpath("//span[@class='pricegh']");
    }
}

?>

