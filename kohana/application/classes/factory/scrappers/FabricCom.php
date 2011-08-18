<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.fabric.com/Index.aspx", new FabricCom());

class FabricCom extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//a[@id='ctlHomeRightColumn_ctlDealOfTheDay_lnkDealOfTheDayName']");
        	$deal->price = $this->_xpath("//span[@id='ctlHomeRightColumn_ctlDealOfTheDay_lblDealOfTheDayMessage']");
        	$deal->desc_long = $this->_xpath("//a[@id='ctlHomeRightColumn_ctlDealOfTheDay_lnkShopNow']/@href");
        	$deal->pictures = $this->_xpath("//img[@id='ctlHomeRightColumn_ctlDealOfTheDay_imgDealOfTheDayImage']/@src");
        	$deal->shipping = $this->_xpath("//td[@class='FreeShipping']");
    }
}

?>

