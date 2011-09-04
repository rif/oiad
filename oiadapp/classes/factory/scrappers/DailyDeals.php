<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.2dailydeals.com/", new DailyDeals());

class DailyDeals extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("/html/body[@class=' catalog-product-view product-todaysdeal']/div[@class='container']/div[@class='outline-creator']/div[@id='main']/div[@class='padder']/form[@id='product_addtocart_form']/div[@class='product-info-box']/h3[@class='product-name']");
        	$deal->price = $this->_xpath("/html/body[@class=' catalog-product-view product-todaysdeal']/div[@class='container']/div[@class='outline-creator']/div[@id='main']/div[@class='padder']/form[@id='product_addtocart_form']/div[@class='product-info-box']/div[2]/div[@class='second-price'][1]/font");
        	$deal->desc_long = $this->_xpath("/html/body[@class=' catalog-product-view product-todaysdeal']/div[@class='container']/div[@class='outline-creator']/div[@id='main']/div[@class='padder']/form[@id='product_addtocart_form']/div[@class='product-info-box']/div[@class='short-description']/p/code/span");
        	$deal->pictures = $this->_xpath("/html/body[@class=' catalog-product-view product-todaysdeal']/div[@class='container']/div[@class='outline-creator']/div[@id='main']/div[@class='padder']/form[@id='product_addtocart_form']/div[@class='product-img-box']/div[@id='image']/div[@class='jqzoom'][1]/img[@id='image0']/@src");
        	$deal->shipping = $this->_xpath("/html/body[@class=' catalog-product-view product-todaysdeal']/div[@class='container']/div[@class='outline-creator']/div[@id='main']/div[@class='padder']/form[@id='product_addtocart_form']/div[@class='product-info-box']/div[2]/div[@class='shipping-price']");
    }
}

?>

