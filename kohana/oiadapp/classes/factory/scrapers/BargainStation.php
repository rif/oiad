<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.bargainstation.com/DailyDeal", new BargainStation());

class BargainStation extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//div[@id='DailyDealTitle']/h3");
        	$deal->price = $this->_xpath("//div[@id='DealPriceCell']");
        	$deal->desc_long = $this->_xpath("//div[@id='DailDealDescription']");
        	$deal->pictures = $this->_xpath("//img[@id='DailyDealImage']/@src");
        	$deal->shipping = $this->_get_host($host).$this->_xpath("//div[@class='checkout-footer checkout-footer-100col'][2]/a[@class='underlined'][1]/@href");
    }
}

?>

