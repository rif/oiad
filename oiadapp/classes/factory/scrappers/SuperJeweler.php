<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.superjeweler.com/IOD/default.asp", new SuperJeweler());

class SuperJeweler extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//div[@class='itemnamebar']");
        	$deal->price = $this->_xpath("//div[@class='todaypricearea2']");
        	$deal->desc_long = $this->_xpath("//div[@class='itemarearighttext']");
        	$deal->pictures = 'http://www.superjeweler.com/IOD/'.$this->_xpath("//img[@width='295']/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>

