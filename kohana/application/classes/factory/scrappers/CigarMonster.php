<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.cigarmonster.com", new CigarMonster());

class CigarMonster extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//h2[@class='monsteritemdes']");
        	$deal->price = $this->_xpath("//span[@class='monsteritemsalepr size1a']");
        	$deal->desc_long = $this->_xpath("//p[@class='monsterblurb']");
        	$deal->pictures = $this->_xpath("//img[@id='skupic']/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>

