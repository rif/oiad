<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.dinodirect.com/DailyDeal", new Dinodirect());

class Dinodirect extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
	 	$deal->site_name = "DinoDirect";
        	$deal->desc_short = $this->_xpath("//a[@class='daily_sellproname']");
        	$deal->price = $this->_xpath("//div[@class='mwtp11_show_info4 tit30b white']");
        	$deal->desc_long = $this->_xpath("//div[@class='daily_sellpoint']/ul");
        	$deal->pictures = $this->_xpath("//div[@id='Div_Image']/a/img/@src");
        	$deal->shipping = $this->_xpath("//div[@class='mwtp11_show_info5 tit18b black']");
    }
}

?>
