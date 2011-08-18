<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.babyage.com/deal_of_the_day.aspx", new BabyAge());

class BabyAge extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//div[@class='product-title']");
        	$deal->price = $this->_xpath("//div[@class='sale-price']/div");
        	$deal->desc_long = $this->_xpath("//div[@id='tab_productfeatures']/ul");
        	$deal->pictures = $this->_xpath("//img[@id='img_prod_main']/@src");
        	$deal->shipping = $this->_xpath("//div[@id='tab_shippinginformation']/ul");
    }
}

?>

