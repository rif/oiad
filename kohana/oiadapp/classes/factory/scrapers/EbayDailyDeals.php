<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://deals.ebay.com/", new EbayDailyDeals());

class EbayDailyDeals extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//h2[@id='v4-19']");
        	$deal->price = $this->_xpath("//td[@class='curPrice_style']");
        	$deal->desc_long = $this->_xpath("//a[@id='but_v4-20']/@href");
        	$deal->pictures = $this->_xpath("//img[@id='img280718577798']/@src");
        	$deal->shipping = $this->_xpath("//div[@class='pad_top']/table/tbody/tr[4]/td");
    }
}

?>

