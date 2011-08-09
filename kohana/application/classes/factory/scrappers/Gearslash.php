<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.gearslash.com/", new Gearslash());

class Gearslash extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
	 	$deal->site_name = "gearSlash";
        	$deal->desc_short = $this->_xpath("//div[@class='container']/h1");
        	$deal->price = $this->_xpath("//div[@class='inner-m-m-sb']");
        	$deal->desc_long = $this->_xpath("//div[@class='main-txt-box']/p[1]");
        	$deal->pictures = $this->_xpath("//a[@class='lightview']/img/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>
