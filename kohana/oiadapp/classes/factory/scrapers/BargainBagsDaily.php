<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://bargainbagsdaily.com/", new BargainBagsDaily());

class BargainBagsDaily extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//h1[1]");
        	$deal->price = $this->_xpath("//span[@class='dod_product_sale_price']");
        	$deal->desc_long = $this->_xpath("//div[@id='desc_div']/p[1]");
        	$deal->pictures = $host.$this->_xpath("//img[@id='img_main']/@src");
        	$deal->shipping = $this->_xpath("//table/tbody/tr[1]/td[2]/table/tbody/tr/td/p[2]");
    }
}

?>

