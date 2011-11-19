<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.muscleandstrength.com/store/deal.html", new MuscleStrength());

class MuscleStrength extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//table[@class='deal-table']//h1");
        	$deal->price = $this->_xpath("//h1[@class='price']");
        	$deal->desc_long = $this->_xpath("//table[@class='deal-table']//p[2]");
        	$deal->pictures = $this->_get_host($host).$this->_xpath("//table[@class='deal-table']//img/@src");
        	$deal->shipping = $this->_xpath("//div[@id='twocol-main']/div[@class='content']/p");
    }
}

?>

