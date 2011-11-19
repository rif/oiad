<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.searsoutlet.com/", new SearsOutlet());

class SearsOutlet extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
	 		$deal->item_link = $this->_xpath("//div[@class='deal_img']/a/@href");
        	$deal->desc_short = $this->_xpath("//p[@class='product_deal']");
        	$deal->price = $this->_xpath("//p[@class='price_deal']/strong");
        	$deal->desc_long = $this->_xpath("");
        	$deal->pictures = $this->_xpath("//img[@id='product_img']/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>

