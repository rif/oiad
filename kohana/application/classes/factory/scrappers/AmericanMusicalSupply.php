<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.americanmusical.com/RSS_Feeds/Ndnd.aspx", new AmericanMusicalSupply());

class AmericanMusicalSupply extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//div[@class='textboxndnd']/a");
        	$deal->price = $this->_xpath("//div[@class='ndndinfort']/div[@class='ndndsaleprices']");
        	$deal->desc_long = $this->_xpath("//div[@class='ndndinfort']");
        	$deal->pictures = $this->_xpath("//img[@class='ndndpic']/@src");
        	$deal->shipping = $this->_xpath("//td[@id='footbox'][3]/a[1]");
    }
}

?>

