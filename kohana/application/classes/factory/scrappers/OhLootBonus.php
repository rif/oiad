<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.ohloot.com/bonusdeal/", new OhLootBonus());

class OhLootBonus extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//div[@id='itemTitle']");
        	$deal->price = $this->_xpath("//table[@class='infoDisplay']//td/b");
        	$deal->desc_long = $this->_xpath("//div[@id='description']");
        	$deal->pictures = $this->_xpath("//img[@id='itemPic']/@src");
        	$deal->shipping = $this->_xpath("//div[@id='description']//font[contains(., 'SHIPPING')]");
    }
}

?>

