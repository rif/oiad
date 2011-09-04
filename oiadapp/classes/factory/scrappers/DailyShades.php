<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.dailyshades.com/", new DailyShades());

class DailyShades extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//div[@id='dodright']/h1/a");
        	$deal->price = $this->_xpath("//div[@id='dodright']/h2");
        	$deal->desc_long = $this->_xpath("//div[@id='dodright']/p[1]");
        	$deal->pictures = $host.$this->_xpath("//img[@class='DODphoto']/@src");
        	$deal->shipping = $this->_xpath("//div[@id='compare']/p[1]");
    }
}

?>

