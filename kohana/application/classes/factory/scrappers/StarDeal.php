<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.5stardeal.com/", new StarDeal());

class StarDeal extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
	 	$deal->site_name = "5 Star Deal";
        	$deal->desc_short = $this->_xpath("/html/body/div[@id='contentContainer']/div[@id='topContent']/div[@id='todaysDailyDeal']/div[@id='dealInfo']/div[@id='dealHeadline']");
        	$deal->price = $this->_xpath("/html/body/div[@id='contentContainer']/div[@id='topContent']/div[@id='todaysDailyDeal']/div[@id='dealInfo']/div[@id='dealPrice']");
        	$deal->desc_long = $this->_xpath("/html/body/div[@id='contentContainer']/div[@id='topContent']/div[@id='todaysDailyDeal']/div[@id='descriptionBox']/div[@id='dailyDealDesc']");
        	$deal->pictures = $host.$this->_xpath("/html/body/div[@id='contentContainer']/div[@id='topContent']/div[@id='todaysDailyDeal']/div[@id='dealPicWrap']/a/img[@id='dealPic']/@src");
        	$deal->shipping = $this->_xpath("/html/body/div[@id='contentContainer']/div[@id='topContent']/div[@id='todaysDailyDeal']/div[@id='dealInfo']/div[@id='freeShipping']");
    }
}

?>