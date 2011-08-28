<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.techforless.com/cgi-bin/tech4less/hot_deal.html", new TechForLess());

class TechForLess extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//div[@id='prodnamewrap']");
        	$deal->price = $this->_xpath("//span[@class='ypdblulinks']");
        	$deal->desc_long = $this->_xpath("//div[@id='productdetailswrap']//p");
        	$deal->pictures = $this->_xpath("//div[@id='productimg']/img/@src");
        	$deal->shipping = $this->_xpath("//div[@id='bottomnav']/ul[2]/li[4]/a/@href");
    }
}

?>

