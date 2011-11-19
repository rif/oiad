<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.rei.com/cj/outlet/deal-of-the-day", new ReiOutlet());

class ReiOutlet extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//div[@id='itemDescrip']/div[1]/h1");
        	$deal->price = $this->_xpath("//span[@class='salePrice']");
        	$deal->desc_long = $this->_xpath("//div[@id='prodInfoColLeft']");
        	$deal->pictures = $this->_xpath("//img[@id='featuredImg']/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>

