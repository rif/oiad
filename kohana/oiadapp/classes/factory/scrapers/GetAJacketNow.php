<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.getajacketnow.com/", new GetAJacketNow());

class GetAJacketNow extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//td[@class='balck18']");
        	$deal->price = $this->_xpath("//td[@class='white16'][@style='padding-top:10px;']/strong");
        	$deal->desc_long = $this->_xpath("//td[@class='white11']");
        	$deal->pictures = $host.$this->_xpath("//img[@width='440']/@src");
        	$deal->shipping = $this->_xpath("//td[@class='white12'][@valign='top']");
    }
}

?>

