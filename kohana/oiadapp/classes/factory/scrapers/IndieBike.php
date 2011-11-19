<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.indiebike.com/The-Peloton/Deal-of-the-Day", new IndieBike());

class IndieBike extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//h1[@style='font-size:medium']");
        	$deal->price = $this->_xpath("//font[@size='3']");
        	$deal->desc_long = $this->_xpath("");
        	$deal->pictures = $this->_get_host($host).$this->_xpath("//tr[@id='handle_itemMainPortlet']//img[@border='0']/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>

