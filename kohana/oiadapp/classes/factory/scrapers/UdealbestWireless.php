<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.udealbest.com/wireless-special.html", new UdealbestWireless());

class UdealbestWireless extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
			$deal->desc_short = $this->_xpath("//div[@id='wsite-content']/h2");
        	$deal->price = $this->_xpath("//div[@class='product-large-price']/div[2]");
        	$deal->desc_long = $this->_xpath("//div[@class='paragraph editable-text']");
        	$deal->pictures = $this->_get_host($host).$this->_xpath("//img[contains(@src, 'uploads')]/@src");
        	$deal->shipping = $this->_xpath("//div[@id='footer-contents']/a[2]/@href");
    }
}

?>

