<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.worldofwatches.com/cust/dailydealsteal.asp", new WorldOfWatches());

class WorldOfWatches extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//font[@color='#3D3F42']");
        	$deal->price = $this->_xpath("//td/font[@color='red'][contains(.,'$')]");
        	$deal->desc_long = $this->_xpath("//table[@width='90%']");
        	$deal->pictures = $this->_get_host($host).$this->_xpath("//div[@id='detailimage']/a/img/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>

