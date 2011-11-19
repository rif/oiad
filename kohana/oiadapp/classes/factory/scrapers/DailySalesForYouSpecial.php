<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.dailysalesforyou.com/Special-Watch-Deal", new DailySalesForYouSpecial());

class DailySalesForYouSpecial extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("/html/body/div[@class='container']/div[3]/div[@class='span-24 last'][2]/span");
        	$deal->price = $this->_xpath("//span[@style='color:#3974D4; font-weight:bold; font-size:40px;']");
        	$deal->desc_long = $this->_xpath("/html/body/div[@class='container']/div[3]/div[@class='span-12 last']/div/div[@class='span-10 last']");
        	$deal->pictures = $this->_xpath("//img[@id='largeimage']/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>

