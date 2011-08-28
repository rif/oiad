<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.meijer.com/s/big-steals/_/N-5io?icid=hpdsthu", new Meijer());

class Meijer extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//h3[@id='bigsteal_title']/a");
        	$deal->price = $this->_xpath("//span[@id='bigsteal_price']");
        	$deal->desc_long = $this->_xpath("//p[@id='bigsteal_desc']");
        	$deal->pictures = $this->_xpath("//a[@id='bigsteal_img']/img/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>

