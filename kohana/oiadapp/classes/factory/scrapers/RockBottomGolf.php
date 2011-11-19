<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://search.rockbottomgolf.com/dealoftheday.html", new RockBottomGolf());

class RockBottomGolf extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//h1[@class='infoheading1']");
        	$deal->price = $this->_xpath("//li[@class='rbsalep']");
        	$deal->desc_long = $this->_xpath("//div[@id='tabinfo0']//td[2]");
        	$deal->pictures = $this->_xpath("//img[@width='169']/@src");
        	$deal->shipping = $this->_xpath("//form[@id='cartForm']/ul/li[11]");
    }
}

?>

