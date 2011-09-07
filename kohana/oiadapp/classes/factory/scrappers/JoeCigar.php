<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.joecigar.com/index.asp", new JoeCigar());

class JoeCigar extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//td[@class='dealTitle']");
        	$deal->price = $this->_xpath("//td[@class='dealPrice']");
        	$deal->desc_long = $this->_xpath("//tr[2]/td[@class='dealDescTxt']");
        	$deal->pictures = $this->_xpath("//img[@id='bigImg']/@src");
        	$deal->shipping = $this->_xpath("//td[@class='dealFooter2']");
    }
}

?>

