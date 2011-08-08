<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.dtagifts.com/", new Dtagifts());

class Dtagifts extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
	 	$deal->site_name = "dtagifts";
        	$deal->desc_short = $this->_xpath("//h1[@class='dod_product_name']");
        	$deal->price = $this->_xpath("//span[@class='dod_product_sale_price']");
        	$deal->desc_long = $this->_xpath("//div[@id='desc_div']");
        	$deal->pictures = $host.$this->_xpath("//img[@id='img_main']/@src");
        	$deal->shipping = $this->_xpath("/html/body/table[4]/tbody/tr/td/table/tbody/tr[1]/td[2]/table/tbody/tr/td/p[2]");
    }
}

?>
