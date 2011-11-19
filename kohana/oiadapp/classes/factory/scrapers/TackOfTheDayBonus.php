<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.tackoftheday.com/extra/default.aspx", new TackOfTheDayBonus());

class TackOfTheDayBonus extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//span[@id='lblName']");
        	$deal->price = $this->_xpath("//span[@id='lblPrice']");
        	$deal->desc_long = $this->_xpath("//span[@id='lblStatsDescription']");
        	$deal->pictures = $this->_get_host($host).$this->_xpath("//img[@id='img']/@src");
        	$deal->shipping = $this->_xpath("//span[@id='lblShipping']");
    }
}

?>

