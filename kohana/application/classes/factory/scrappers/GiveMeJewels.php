<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.givemejewels.com/", new GiveMeJewels());

class GiveMeJewels extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
	 	$deal->site_name = "Give Me Jewels";
        	$deal->desc_short = $this->_xpath("/html/body/table/tbody/tr/td[2]/center[2]/table/tbody/tr/td/center/font/center/table/tbody/tr/td[3]/font/b");
        	$deal->price = $this->_xpath("/html/body/table/tbody/tr/td[2]/center[2]/table/tbody/tr/td/center/font/center/table/tbody/tr/td[4]/center/font/b");
        	$deal->desc_long = $this->_xpath("");
        	$deal->pictures = $this->_xpath("");
        	$deal->shipping = $this->_xpath("");
    }
}

?>
