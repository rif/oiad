<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.gooddeals18.com/category/deal_of_the_day/", new GoodDeals18());

class GoodDeals18 extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
	 	$deal->site_name = "Good Deals 18";
        	$deal->desc_short = $this->_xpath("");
        	$deal->price = $this->_xpath("");
        	$deal->desc_long = $this->_xpath("");
        	$deal->pictures = $this->_xpath("");
        	$deal->shipping = $this->_xpath("");
    }
}

?>
