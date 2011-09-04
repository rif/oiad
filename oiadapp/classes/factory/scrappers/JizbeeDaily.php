<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.jizbee.com/", new JizbeeDaily());

class JizbeeDaily extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//td[@class='bigheader']");
        	$deal->price = $this->_xpath("//span[@class='bluemedium']/font");
        	$deal->desc_long = $this->_xpath("//div[@id='pageleftbg']/div");
        	$deal->pictures = $this->_xpath("//img[@id='myimg1']/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>

