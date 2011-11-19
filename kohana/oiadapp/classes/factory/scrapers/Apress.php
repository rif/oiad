<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.apress.com/dailydeal/", new Apress());

class Apress extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//div[@class='product-name']/h2");
        	$deal->price = $this->_xpath("//div[@class='block block-dotd']/p[@class='centred'][2]/a[@class='medium yellow button']");
        	$deal->desc_long = $this->_xpath("//div[@class='product-main-info']/div[@class='short-description std ']");
        	$deal->pictures = $this->_xpath("//p[@class='product-image']/img/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>

