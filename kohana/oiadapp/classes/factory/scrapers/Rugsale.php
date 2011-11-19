<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.rugsale.com/rug_sale_deal_of_the_day.html", new Rugsale());

class Rugsale extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//div[@class='mb10 f16 bld']");
        	$deal->price = $this->_xpath("//div[@class='mb10 f16']/span[@class='bld']");
        	$deal->desc_long = $this->_xpath("//div[@class='mb10']");
        	$deal->pictures = $this->_get_host($host).$this->_xpath("//div[@class='fl ml20 mr20']/img/@src");
        	$deal->shipping = $this->_xpath("//td[@class='plainBox']/p[1]");
    }
}

?>

