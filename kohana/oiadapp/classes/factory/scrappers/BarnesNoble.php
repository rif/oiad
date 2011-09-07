<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.barnesandnoble.com/best-deals.asp", new BarnesNoble());

class BarnesNoble extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//div[@id='dd2-maindeal']/div[@class='dd2-productinfo-wrap']/div[@class='dd2-pricing edlp2']/div[@class='dd2-pricing-padding']/div[@class='dd2-title']/a/span[@class='Title']");
        	$deal->price = $this->_xpath("//div[@id='dd2-maindeal']/div[@class='dd2-productinfo-wrap']/div[@class='dd2-pricing edlp2']/div[@class='dd2-pricing-padding']/div[@class='dd2-todaysprice']");
        	$deal->desc_long = $this->_xpath("//div[@id='dd2-maindeal']/div[@class='dd2-productinfo-wrap']/div[@class='dd2-copy']");
        	$deal->pictures = $this->_xpath("//div[@id='dd2-maindeal']/div[@class='dd2-productinfo-wrap']/div[@class='dd2-image']/a/img/@src");
        	$deal->shipping = $this->_xpath("/html/body[@id='CDS']/div[@class='content']/div[@id='bn-footer']/div[@id='bnf-links']/div[@class='col-4']/div[@class='innerpadding']/a[3]/@href");
    }
}

?>

