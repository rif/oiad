<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.totally-cards.com/", new TotallyCards());

class TotallyCards extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//p[@class='txtContentTitle']/strong");
        	$deal->price = $this->_xpath("//div[@class='boxContent'][2]/form/p[3]");
        	$deal->desc_long = $this->_xpath("//div[@class='boxContent']/form/p[2]");
        	$deal->pictures = $host.$this->_xpath("//div[@class='boxContent']//img/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>

