<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.dodhero.com/index.php?main_page=index&cPath=9", new DodHeroSidekick());

class DodHeroSidekick extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
	 	$deal->site_name = "DOD Hero Sidekick";
        	$deal->desc_short = $this->_xpath("");
        	$deal->price = $this->_xpath("");
        	$deal->desc_long = $this->_xpath("");
        	$deal->pictures = $this->_xpath("");
        	$deal->shipping = $this->_xpath("");
    }
}

?>
