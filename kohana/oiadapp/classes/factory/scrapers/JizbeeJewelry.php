<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.jizbee.com/jewelry/", new JizbeeJewelry());

class JizbeeJewelry extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//td[@class='bigheader']");
        	$deal->price = $this->_xpath("//span[@class='bluemedium']/font");
        	$deal->desc_long = $this->_xpath("//div[@id='pageleftbg']/div/p[2]/span[@class='Apple-style-span']");
        	$deal->desc_long = $this->_xpath("//div[@id='pageleftbg']/div");
        	$deal->shipping = $this->_xpath("");
    }
}

?>

