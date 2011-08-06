<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.newdavincis.com/specials.html", new Newdavincis30Minute());

class Newdavincis30Minute extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
	 	$deal->site_name = "NewDaVincis 30 Minute";
        	$deal->desc_short = $this->_xpath("");
        	$deal->price = $this->_xpath("");
        	$deal->desc_long = $this->_xpath("");
        	$deal->pictures = $this->_xpath("");
        	$deal->shipping = $this->_xpath("");
    }
}

?>
