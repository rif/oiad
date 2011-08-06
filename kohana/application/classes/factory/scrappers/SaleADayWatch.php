<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("https://1saleaday.com/watch", new SaleADayWatch());

class SaleADayWatch extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
	 	$deal->site_name = "1 Sale A Day Watch";
        	$deal->desc_short = $this->_xpath("/html/body/div[@id='wrapper']/div[@id='content_wrapper']/div[@id='main_content']/div[@id='left_col_featured_product_summary']/h1");
        	$deal->price = $this->_xpath("/html/body/div[@id='wrapper']/div[@id='content_wrapper']/div[@id='main_content']/div[@id='right_col_related_products']/div[@id='product_actions']/div[@id='comparitive_pricing']/form[@id='buy_now']/p[@class='blue_price_highlight']");
        	$deal->desc_long = $this->_xpath("/html/body/div[@id='wrapper']/div[@id='content_wrapper']/div[@id='main_content']/div[@id='left_col_featured_product_summary']/div[@id='product_image']/div[@id='left_col_featured_product_details']/div[@id='nav_product_summary']/div[@id='more']/div[@class='product_details_text']");
        	$deal->pictures = $this->_xpath("/html/body/div[@id='wrapper']/div[@id='content_wrapper']/div[@id='main_content']/div[@id='left_col_featured_product_summary']/div[@id='product_image']/img[@id='main_image']/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>
