<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://closeout.tooliday.com/", new ToolidayCloseout());

class ToolidayCloseout extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
	 	$deal->site_name = "Tooliday Closeout";
        	$deal->desc_short = $this->_xpath("");
        	$deal->price = $this->_xpath("");
        	$deal->desc_long = $this->_xpath("");
        	$deal->pictures = $this->_xpath("");
        	$deal->shipping = $this->_xpath("");
    }
}

?>