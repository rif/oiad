<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.scoobydeal.com/", new Scoobydeal());

class Scoobydeal extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//td[@id='productname']");
        	$deal->price = $this->_xpath("//div[@id='details']//th");
        	$deal->desc_long = $this->_xpath("//div[@id='container_info']");
        	$deal->pictures = $host.$this->_xpath("//div[@id='pic']/img/@src");
        	$deal->shipping = $this->_xpath("//div[@id='details']//td[@class='blacky']");
    }
}

?>

