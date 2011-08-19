<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.kindredcreationsideas.blogspot.com/", new KindredCreations());

class KindredCreations extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//h3[@class='post-title entry-title']/a");
        	$deal->price = $this->_xpath("");
        	$deal->desc_long = $this->_xpath("//div[@class='post-body entry-content']");
        	$deal->pictures = $this->_xpath("//div[@class='post-body entry-content']/a/img/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>

