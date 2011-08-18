<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.atgstores.com/dailyDeals/", new AtgStores());

class AtgStores extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//span[@class='itemTitle']");
        	$deal->price = $this->_xpath("//span[@style='font-size:26pt; color:#ffffff;']");
        	$deal->desc_long = $this->_xpath("//font[@face='arial']");
        	$deal->pictures = $this->_xpath("//img[@class='productImg']/@src");
        	$deal->shipping = $this->_xpath("//span[@class='ship']");
    }
}

?>

