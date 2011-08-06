<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.josbank.com/menswear/shop/SubCategory_11001_10050_9252000", new JosABank());

class JosABank extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
	 	$deal->site_name = "JoS A Bank";
        	$deal->desc_short = $this->_xpath("");
        	$deal->price = $this->_xpath("");
        	$deal->desc_long = $this->_xpath("");
        	$deal->pictures = $this->_xpath("");
        	$deal->shipping = $this->_xpath("");
    }
}

?>
