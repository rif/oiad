<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.skyauction.com/deal-of-the-day.do", new SkyAuction());

class SkyAuction extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
	 		$deal->item_link = $this->_xpath("//td[@class='title']/a/@href");
        	$deal->desc_short = $this->_xpath("//td[@class='title']/a");
        	$deal->price = $this->_xpath("//td[@class='inner3 inner3AUC']");
        	$deal->desc_long = $this->_xpath("//td[@class='inner2']");
        	$deal->pictures = $this->_xpath("//div[@class='thumbnail thumbnailAUC ']/a/img/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>

