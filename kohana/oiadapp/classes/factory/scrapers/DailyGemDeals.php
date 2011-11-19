<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.dailygemdeals.com/", new DailyGemDeals());

class DailyGemDeals extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $host.$this->_xpath("/html/body/div[@id='Layer3']/img/@src");
        	$deal->price = $host.$this->_xpath("/html/body/div[@id='Layer13']/img/@src");
        	$deal->desc_long = $this->_xpath("/html/body/div[@id='Layer11']/p/font");
        	$deal->pictures = $host.$this->_xpath("/html/body/div[@id='Layer7']/img/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>

