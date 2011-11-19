<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.dealaday.org/", new DealADay());

class DealADay extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//span[@class='brandD']");
        	$deal->price = $this->_xpath("//span[@class='priceg']");
        	$deal->desc_long = $this->_xpath("//font[2]");
        	$deal->pictures = $host.$this->_xpath("//a[@class='buylink']/img/@src");
        	$deal->shipping = $this->_xpath("//span[@class='pricegh']");
    }
}

?>

