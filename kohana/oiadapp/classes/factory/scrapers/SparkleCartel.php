<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.sparklecartel.com/", new SparkleCartel());

class SparkleCartel extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//div[@id='right_col']/h1");
        	$deal->price = $this->_xpath("//span[@id='price']");
        	$deal->desc_long = $this->_xpath("//div[@class='idxpar']");
        	$deal->pictures = $host.$this->_xpath("//img[@id='prod_image']/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>

