<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.projectorpeople.com/deal/default.asp", new ProjectorPeople());

class ProjectorPeople extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//div[@id='main']/h2[1]");
        	$deal->price = $this->_xpath("//span[@class='price alert']");
        	$deal->desc_long = $this->_xpath("//div[@id='main']/ul");
        	$deal->pictures = $this->_get_host($host).$this->_xpath("//img[@alt='Deal of the Day Projector']/@src");
        	$deal->shipping = $this->_xpath("//div[@id='quicklinks']/p[@class='bold']");
    }
}

?>

