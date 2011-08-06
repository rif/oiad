<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.dailyimprint.com/", new DailyImprint());

class DailyImprint extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
	 	$deal->site_name = "Daily Imprint";
        	$deal->desc_short = $this->_xpath("//span[@class='brandD']");
        	$deal->price = $this->_xpath("//span[@class='priceg']");
        	$deal->desc_long = $this->_xpath("//td[@width='500']//font[@face='verdana,ms san serif'][@color='#ffffff'][@size='2']");
        	$deal->pictures = $host.$this->_xpath("//img[@height='300']/@src");
        	$deal->shipping = $this->_xpath("//span[@class='pricegh']");
    }
}

?>
