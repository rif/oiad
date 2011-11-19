<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.allheart.com/ko123clearance.html?_s_icmp=DOTD", new Allheart());

class Allheart extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("/html/body[@class='product-page']/div[@id='v3page']/div[@id='v3content']/div[@id='v3product-detail']/h1");
        	$deal->price = $this->_xpath("/html/body[@class='product-page']/div[@id='v3page']/div[@id='v3content']/div[@id='v3product-detail']/div[@id='v3-product-detail']/p[@class='v3prices']/span[@id='v3price']/strong");
        	$deal->desc_long = $this->_xpath("/html/body[@class='product-page']/div[@id='v3page']/div[@id='v3content']/div[@id='v3product-detail']/div[@id='v3-product-detail']/div[@id='v3tabbed-content']/div[@id='v3panes']/div[@id='v3pane1']/p");
        	$deal->pictures = $this->_xpath("/html/body[@class='product-page']/div[@id='v3page']/div[@id='v3content']/div[@id='v3product-detail']/div[@id='v3-product-images']/img[@id='productphoto']/@src");
        	$deal->shipping = $this->_xpath("/html/body[@class='product-page']/div[@id='v3page']/ul[@id='marketing-bar']/li[@class='first']/a[@id='freeship']");
    }
}

?>

