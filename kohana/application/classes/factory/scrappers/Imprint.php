<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://promotions.4imprint.com/dealoftheday/", new Imprint());

class Imprint extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("/html/body/form[@id='aspnetForm']/div[@class='contentWrapper']/div[@class='MainContent']/div[@class='detailsContainer']/div[@class='detailsProductName']/h2/span[@id='ctl00_ContentPlaceHolder1_productdetails1_lblProductName']");
        	$deal->price = $this->_xpath("/html/body/form[@id='aspnetForm']/div[@class='contentWrapper']/div[@class='MainContent']/div[@class='detailsContainer']/div[@class='detailsImagePriceDiv']/div[@class='detailsPriceAd']/div[@class='detailsPrice']/span[@id='ctl00_ContentPlaceHolder1_productdetails1_lblPrice']");
        	$deal->desc_long = $this->_xpath("/html/body/form[@id='aspnetForm']/div[@class='contentWrapper']/div[@class='MainContent']/div[@class='homepageBelowDetails']/div[@class='homepageRightCol']");
        	$deal->pictures = $this->_xpath("/html/body/form[@id='aspnetForm']/div[@class='contentWrapper']/div[@class='MainContent']/div[@class='detailsContainer']/div[@class='detailsImagePriceDiv']/div[@class='detailsImage']/img[@id='ctl00_ContentPlaceHolder1_productdetails1_imgProductDetailed']/@src");
        	$deal->shipping = $this->_xpath("/html/body/form[@id='aspnetForm']/div[@class='contentWrapper']/div[@class='MainContent']/div[@class='detailsContainer']/div[@class='detailsImagePriceDiv']/div[@class='detailsPriceAd']/div[@class='detailsPrice']/span[@id='ctl00_ContentPlaceHolder1_productdetails1_lblShipping']");
    }
}

?>

