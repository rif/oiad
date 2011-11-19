<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.tomobuys.com/servlet/StoreFront", new TomoBuys());

class TomoBuys extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//td[@width='359']");
        	$deal->price = $this->_xpath("//p/strong");
        	$deal->desc_long = $this->_xpath("//table[@width='720']/tbody/tr[2]/td[2]/p[1]");
        	$deal->pictures = $this->_xpath("//img[contains(@src,'dod')]/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>

