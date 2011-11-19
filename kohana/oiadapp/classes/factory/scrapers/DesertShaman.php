<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://onedaydeal.net/Ancient-Incense-Smoke-Shop/index.php", new DesertShaman());

class DesertShaman extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("");
        	$deal->price = $this->_xpath("");
        	$deal->desc_long = $this->_xpath("");
        	$deal->pictures = $this->_xpath("");
        	$deal->shipping = $this->_xpath("");
    }
}

?>

