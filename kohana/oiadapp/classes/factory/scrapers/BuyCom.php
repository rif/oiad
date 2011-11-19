<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.buy.com/retail/clearance/todays_deals.asp", new BuyCom());

class BuyCom extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//a[@class='productTitle']/b");
        	$deal->price = $this->_xpath("//b[@class='blueText']");
        	$deal->desc_long = $this->_xpath("");
        	$deal->pictures = $this->_xpath("//a[@class='productTitle']/img/@src");
        	$deal->shipping = $this->_xpath("//td[@id='productFreeShip']/div/nobr/div/a[@class='freeGreenText']");
    }
}

?>

