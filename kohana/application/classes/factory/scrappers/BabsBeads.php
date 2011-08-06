<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://babsbeadwarehouse.dodshops.com/", new BabsBeads());

class BabsBeads extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
	 	$deal->site_name = "Babs Beads";
        	$deal->desc_short = $this->_xpath("//h1[@class='dod_product_name']");
        	$deal->price = $this->_xpath("//span[@class='dod_product_sale_price']");
        	$deal->desc_long = $this->_xpath("//div[@id='desc_div']/big/big");
        	$deal->pictures = $host.$this->_xpath("//img[@id='img_main']/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>
