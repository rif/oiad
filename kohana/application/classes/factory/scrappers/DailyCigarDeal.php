<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://dailycigardeal.com/", new DailyCigarDeal());

class DailyCigarDeal extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
	 	$deal->site_name = "Daily Cigar Deal";
        	$deal->desc_short = $this->_xpath("//table[@id='MAINCELL_table']/tbody/tr/td/table/tbody/tr[3]/td[1]/table/tbody/tr[2]/td");
        	$deal->price = $this->_xpath("//table[@id='MAINCELL_table']/tbody/tr/td/table/tbody/tr[3]/td[1]/table/tbody/tr[3]/td/table/tbody/tr[2]/td/table/tbody/tr/td[1]");
        	$deal->desc_long = $this->_xpath("//table[@id='MAINCELL_table']/tbody/tr/td/table/tbody/tr[3]/td[1]/table/tbody/tr[5]/td");
        	$deal->pictures = $this->_xpath("//table[@id='MAINCELL_table']/tbody/tr/td/table/tbody/tr[3]/td[1]/table/tbody/tr[1]/td/div[@id='imageHoverTarget']/div[@id='thumbnail0']/a[@id='imgLink']/img[@id='bigImg']/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>
