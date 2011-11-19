<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.skinstore.com/the-daily-special.aspx", new SkinstoreCom());

class SkinstoreCom extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//div[@id='BreadCrumbAnchor']//h2/a");
        	$deal->price = $this->_xpath("//span[@class='redCallout']");
        	$deal->desc_long = $this->_xpath("//div[@id='BreadCrumbAnchor']//h2/following::p");
        	$deal->pictures = $this->_xpath("//img[contains(@src, 'products')]/@src");
        	$deal->shipping = $this->_get_host($host).$this->_xpath("//a[@class='footer_nav_link'][3]/@href");
    }
}

?>

