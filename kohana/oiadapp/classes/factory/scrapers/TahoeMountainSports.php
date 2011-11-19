<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.tahoemountainsports.com/", new TahoeMountainSports());

class TahoeMountainSports extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
	 		$deal->item_link = $this->_xpath("//div[@style='margin:5px 0;']/a/@href");
        	$deal->desc_short = $this->_xpath("//div[@style='margin:5px 0;']/a");
        	$deal->price = $this->_xpath("//div[@style='color:#ffffff; font-size:16px; margin: 5px 0;']");
        	$deal->desc_long = $this->_xpath("");
        	$deal->pictures = $this->_xpath("//img[@alt='Product Name']");
        	$deal->shipping = $this->_xpath("");
    }
}

?>

