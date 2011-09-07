<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://thewinespies.com/", new TheWineSpies());

class TheWineSpies extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//h2[@id='wine-name']");
        	$deal->price = $this->_xpath("//tr[@class='price']/td[2]");
        	$deal->desc_long = $this->_xpath("//div[@class='winery-says']/p[1]");
        	$deal->pictures = $host.$this->_xpath("//img[@id='wine-thumb']/@src");
        	$deal->shipping = $host.$this->_xpath("//div[@id='footer']/p[1]/a[4]/@href");
    }
}

?>
