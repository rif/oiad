<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.oneadaydeal.com/", new OneADayDeal());

class OneADayDeal extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//div[@id='dealTitle']/h1");
        	$deal->price = $this->_xpath("//div[@class='ourprice']");
        	$deal->desc_long = $this->_xpath("//div[@id='dealdescription']");
        	$deal->pictures = $host.$this->_xpath("//div[@class='dealimage']/a/img/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>

