<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://gameaccess.ca/Game-Store-DealOfTheDay.htm", new GameAccess());

class GameAccess extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//span[@class='verdana_12px_grey']/strong");
        	$deal->price = $this->_xpath("//td[@class='verdana_11px_grey'][2]/strong[@class='verdana_11px_red']");
        	$deal->desc_long = $this->_xpath("//div[@id='gameinfocontainer']");
        	$deal->pictures = $this->_get_host($host).$this->_xpath("//img[@width='156']/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>

