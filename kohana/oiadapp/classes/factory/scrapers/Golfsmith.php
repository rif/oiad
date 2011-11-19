<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.golfsmith.com/", new Golfsmith());

class Golfsmith extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
			$deal->item_link = $host.$this->_xpath("//p[@id='qbd_buy_button']/a/@href");
        	$deal->desc_short = $this->_xpath("//p[@id='qbd_product_title']/a");
        	$deal->price = $this->_xpath("//p[@id='qbd_pricing_price']");
        	$deal->desc_long = $host.$this->_xpath("//p[@id='qbd_buy_button']/a/@href");
        	$deal->pictures = $this->_xpath("//div[@id='qbd_product_image']/a/img/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>

