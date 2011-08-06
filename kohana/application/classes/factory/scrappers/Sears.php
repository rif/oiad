<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.sears.com/shc/s/dap_10153_12605_DAP_WOW+Specials?storeId=10153&vName=WOW+Specials&catalogInd=DAP&catalogId=12605&i_cntr=1299622707723", new Sears());

class Sears extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
	 	$deal->site_name = "Sears";
        	$deal->desc_short = $this->_xpath("");
        	$deal->price = $this->_xpath("");
        	$deal->desc_long = $this->_xpath("");
        	$deal->pictures = $this->_xpath("");
        	$deal->shipping = $this->_xpath("");
    }
}

?>
