<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.giftsprings.com/Merchant2/merchant.mv?Screen=CTGY&Category_Code=daily-special", new Giftsprings());

class Giftsprings extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
	 		$deal->item_link = $this->_xpath("//div[@class='product-name']/a/@href");
        	$deal->desc_short = $this->_xpath("//div[@class='product-name']/a");
        	$deal->price = $this->_xpath("//span[@id='price-value']");
        	$deal->desc_long = $this->_xpath("//div[@class='product-code']");
        	$deal->pictures = "http://www.giftsprings.com/mm5/".$this->_xpath("//div[@class='product-thumbnail']/a/img/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>

