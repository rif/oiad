<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.udealbest.com/deal-of-the-day.html", new Udealbest());

class Udealbest extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//div[@class='product-large product']/div");
        	$deal->price = '$'.$this->_xpath("//div[@class='product-large-price']/div[2]");
        	$deal->desc_long = $this->_xpath("//div[@class='paragraph editable-text']");
        	$deal->pictures = $this->_get_host($host).$this->_xpath("//img[@class='product-image']/@src");
        	$deal->shipping = $this->_xpath("//div[@id='footer-contents']/a[2]/@href");
    }
}

?>

