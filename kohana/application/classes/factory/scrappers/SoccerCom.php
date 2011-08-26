<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.soccer.com/Navigation.process?Ne=330&Srp=24&N=837", new SoccerCom());

class SoccerCom extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
	 		$deal->item_link = $this->_get_host($host).$this->_xpath("//p[@class='productName']/a/@href");
        	$deal->desc_short = $this->_xpath("//p[@class='productName']/a");
        	$deal->price = $this->_xpath("//p[@class='price']");
        	$deal->desc_long = $this->_xpath("");
        	$deal->pictures = $this->_get_host($host).$this->_xpath("//div[@id='dealDay']/a/img/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>

