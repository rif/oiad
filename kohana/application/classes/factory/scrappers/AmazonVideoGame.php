<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.amazon.com/gp/feature.html/ref=amb_link_85826191_2?ie=UTF8&docId=1000208101&pf_rd_m=ATVPDKIKX0DER&pf_rd_s=right-blog-0&pf_rd_r=1839MMT7K9ZBZ5PT4YEE&pf_rd_t=101&pf_rd_p=1277833802&pf_rd_i=468642", new AmazonVideoGame());

class AmazonVideoGame extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//tr[@class='small'][1]/td[3]/a[1]");
        	$deal->price = $this->_xpath("//table[@class='amabot_widget']/tbody/tr[@class='small'][2]/td[2]/table/tbody/tr[2]/td[2]/b[@class='price']");
        	$deal->desc_long = $this->_xpath("//table[@class='amabot_widget']/tbody/tr[3]/td");
        	$deal->pictures = $this->_xpath("//img[@class='hoverZoomLink']/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>

