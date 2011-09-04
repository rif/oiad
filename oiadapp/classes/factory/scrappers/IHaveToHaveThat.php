<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.ihavetohavethat.com/", new IHaveToHaveThat());

class IHaveToHaveThat extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//div[@class='title dkblue']");
        	$deal->price = $this->_xpath("//div[@class='price orange']");
        	$deal->desc_long = $this->_xpath("");
        	$deal->pictures = $host.$this->_xpath("//div[@class='galleria-stage']//img/@src");
        	$deal->shipping = $this->_xpath("//td[@class='that_info']/div[@class='center']/div[4]");
    }
}

?>

