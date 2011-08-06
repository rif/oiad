<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.amazon.com/MP3-Music-Download/b/ref=topnav_storetab_dmusic?ie=UTF8&node=163856011", new AmazonMp3());

class AmazonMp3 extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
	 	$deal->site_name = "Amazon MP3";
        	$deal->desc_short = $this->_xpath("");
        	$deal->price = $this->_xpath("");
        	$deal->desc_long = $this->_xpath("");
        	$deal->pictures = $this->_xpath("");
        	$deal->shipping = $this->_xpath("");
    }
}

?>
