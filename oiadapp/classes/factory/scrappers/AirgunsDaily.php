<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.airgunsdaily.com/", new AirgunsDaily());

class AirgunsDaily extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("/html/body[@id='page-index']/div[@id='main']/div[@id='page_body']/div[@id='content']/div[@id='index_content']/div[@id='bottom_content']/h1[@id='product']");
        	$deal->price = $this->_xpath("/html/body[@id='page-index']/div[@id='main']/div[@id='page_body']/div[@id='sidebar']/div[@id='sidebar_item_price']/span[@class='big_blue_font']");
        	$deal->desc_long = $this->_xpath("/html/body[@id='page-index']/div[@id='main']/div[@id='page_body']/div[@id='content']/div[@id='index_content']/div[@id='bottom_content']/div[@id='description']/p[2]");
        	$deal->pictures = $this->_xpath("/html/body[@id='page-index']/div[@id='main']/div[@id='page_body']/div[@id='content']/div[@id='index_content']/div[@id='top_content']/div[@id='featured_content']/img[@id='featured_image']/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>

