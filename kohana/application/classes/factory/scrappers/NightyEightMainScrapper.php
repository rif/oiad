<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper('http://www.98main.com/', new NightyEightMainScrapper());

class NightyEightMainScrapper extends AbstractScrapper {

    protected function _fillDetails($deal, $host) {
        $deal->site_name = '98 Main';
        $deal->desc_short = trim(pq('h1.product-title')->text());
        $deal->price = pq('#ctl00_ContentPlaceHolder1_productdetails1_lblPrice')->text();
        $deal->desc_long = trim(pq('.homepageRightCol ul.bulletedCopy')->text());
        $deal->pictures = "h".pq('#ctl00_ContentPlaceHolder1_productdetails1_imgProductDetailed')->attr('src')."g";        
        $deal->shipping = pq('#ctl00_ContentPlaceHolder1_productdetails1_lblShipping')->text();
    }
}

?>