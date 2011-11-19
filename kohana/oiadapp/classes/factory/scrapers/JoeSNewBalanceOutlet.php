<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.joesnewbalanceoutlet.com/", new JoeSNewBalanceOutlet());

class JoeSNewBalanceOutlet extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//a[@class='plainhover']");
        	$deal->price = $this->_xpath("//span[@style='font-family: Geneva, Verdana, Arial, Helvetica, san-serif;font-weight: bold;color: #CC0033;font-size: 21px;margin-right:20px;float:right;']");
        	$deal->desc_long = $this->_xpath("");
        	$deal->pictures = $host.$this->_xpath("//img[@width='100']/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>

