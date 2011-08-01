<?php
defined('SYSPATH') OR die('No Direct Script Access');

require_once 'PolyFactory.php';

PolyFactory::addScrapper('http://promotions.4imprint.com/dealoftheday/', new FourImprintScrapper());

class FourImprintScrapper extends AbstractScrapper {

    protected function _fillDetails($deal, $host) {
        $deal->site_name = '4imprint';
        $deal->desc_short = trim(pq('#ctl00_ContentPlaceHolder1_productdetails1_lblProductName')->text());
        $deal->price = pq('#ctl00_ContentPlaceHolder1_productdetails1_lblPrice')->text();
        $deal->desc_long = trim(pq('.homepageRightCol ul.bulletedCopy')->text());
        $deal->pictures = "h".pq('#ctl00_ContentPlaceHolder1_productdetails1_imgProductDetailed')->attr('src')."g";        
        $deal->shipping = pq('#ctl00_ContentPlaceHolder1_productdetails1_lblShipping')->text();
    }
}

?>