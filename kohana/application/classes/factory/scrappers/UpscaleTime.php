<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.upscaletime.com/", new UpscaleTime());

class UpscaleTime extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
	 	$deal->site_name = "Upscale Time";
        	$deal->desc_short = $this->_xpath("");
        	$deal->price = $this->_xpath("");
        	$deal->desc_long = $this->_xpath("");
        	$deal->pictures = $this->_xpath("");
        	$deal->shipping = $this->_xpath("");
    }
}

?>