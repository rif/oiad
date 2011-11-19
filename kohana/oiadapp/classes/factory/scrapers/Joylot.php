<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.joylot.com/store_pages/Joy-Of-The-Day.cfm", new Joylot());

class Joylot extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//font[@size='4']");
        	$deal->price = $this->_xpath("//span[@id='ctl00_Body_lblSalePrice12']/font/span");
        	$deal->desc_long = $this->_xpath("");
        	$deal->pictures = $this->_xpath("//img[@width='350']/@src");
        	$deal->shipping = $this->_xpath("//font[@color='#009900']");
    }
}

?>

