<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.nextdaywatches.com/", new NextDayWatches());

class NextDayWatches extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
	 		$deal->item_link = $this->_xpath("//a[@class='photo']/@href");	
        	$deal->desc_short = $this->_xpath("//div[@class='todaysdeal']/a[2]/h2");
        	$deal->price = $this->_xpath("//div[@class='todaysdeal']/p[1]/strong[2]");
        	$deal->desc_long = $this->_xpath("//div[@class='todaysdeal']/p[1]");
        	$deal->pictures = $this->_xpath("//a[@class='photo']/p/img/@src");
        	$deal->shipping = $this->_xpath("//div[@class='midcol']/div[@class='contentbox'][1]/p");
    }
}

?>

