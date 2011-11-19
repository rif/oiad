<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("https://www.friendsandfamilycircle.com/", new FriendsAndFamilyCircle());

class FriendsAndFamilyCircle extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("");
        	$deal->price = $this->_xpath("");
        	$deal->desc_long = $this->_xpath("");
        	$deal->pictures = $this->_xpath("");
        	$deal->shipping = $this->_xpath("");
    }
}

?>
