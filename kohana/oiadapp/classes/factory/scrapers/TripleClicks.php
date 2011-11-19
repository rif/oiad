<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.tripleclicks.com/", new TripleClicks());

class TripleClicks extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
	 		$deal->item_link = $host.$this->_xpath("//div[@class='MSOLLghtGrayBody']//span/a/@href");
        	$deal->desc_short = $this->_xpath("//div[@class='MSOLLghtGrayBody']//span/a");
        	$deal->price = $this->_xpath("//span[@style='font-size:36px; letter-spacing:-1px; color:#669900;']/strong");
        	$deal->desc_long = $this->_xpath("");
        	$deal->pictures = $host.$this->_xpath("//a[@class='highslide']/img/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>

