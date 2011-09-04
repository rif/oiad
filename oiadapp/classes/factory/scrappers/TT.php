<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.tandtdailydeals.com/", new TT());

class TT extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//td[@id='dnn_ctr392_sotdDisplay1_tdProductName']");
        	$deal->price = $this->_xpath("//span[@id='dnn_ctr392_sotdDisplay1_lblPrice']");
        	$deal->desc_long = $this->_xpath("//td[@id='dnn_ctr392_sotdDisplay1_tdSOTDSpecs']/ul");
        	$deal->pictures = $host.$this->_xpath("//td[@id='dnn_ctr392_sotdDisplay1_tdSOTDImage1']/p/img/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>

