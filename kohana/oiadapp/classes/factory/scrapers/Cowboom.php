<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.cowboom.com/deal-of-the-day.cfm", new Cowboom());

class Cowboom extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//div[@class='DOTDTitle']");
        	$deal->price = $this->_xpath("//div[@class='DOTDPrice']");
        	$deal->desc_long = $this->_xpath("//div[@id='ProdDesc']");
        	$deal->pictures = $this->_xpath("//div[@class='DOTDImageContainer']/img/@src");
        	$deal->shipping = $this->_xpath("//div[@class='DOTDFreeShipContainer']");
    }
}

?>

