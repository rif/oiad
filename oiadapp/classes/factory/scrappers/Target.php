<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://dailydeals.target.com/", new Target());

class Target extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//h3[@class='hc_heroName']");
        	$deal->price = $this->_xpath("//div[@class='hc_heroPrice']");
        	$deal->desc_long = $this->_xpath("//div[@class='hc_heroDesc']");
        	$deal->pictures = $this->_xpath("//img[@id='heroImage']/@src");
        	$deal->shipping = $this->_xpath("//div[@class='hc_heroSaving']");
    }
}

?>

