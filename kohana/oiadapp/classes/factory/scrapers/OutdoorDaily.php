<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.outdoordaily.com/", new OutdoorDaily());

class OutdoorDaily extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//h1/following-sibling::h2");
        	$deal->price = $this->_xpath("//td/h3");
        	$deal->desc_long = $this->_xpath("//td[@bgcolor='#B9BBB1']");
        	$deal->pictures = $host.$this->_xpath("//img[@height='200']/@src");
        	$deal->shipping = $this->_xpath("//b[contains(.,'Shippin')]/following::td[1]");
    }
}

?>

