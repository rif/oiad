<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.ecost.com/n/Bargain-Countdown/page-bargain", new Ecost());

class Ecost extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
	 		$deal->item_link = $this->_get_host($host).$this->_xpath("//p[@class='wbreak w360 itemName']/a/@href");
        	$deal->desc_short = $this->_xpath("//p[@class='wbreak w360 itemName']/a");
        	$deal->price = $this->_xpath("//p[@class='fsize18 fred fbold']");
        	$deal->desc_long = $this->_xpath("");
        	$deal->pictures = $this->_xpath("//img[@class='floatL']/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>

