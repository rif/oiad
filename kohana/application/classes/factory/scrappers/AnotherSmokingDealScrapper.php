<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper('http://anothersmokingdeal.com/', new AnotherSmokinDealScrapper());

class AnotherSmokinDealScrapper extends AbstractScrapper {

    protected function _fillDetails($deal, $host) {
        $deal->site_name = 'Another Smokin Deal';
        $deal->desc_short = trim(pq('span.product-name')->text());
        $deal->price = trim(pq('span.product-price')->text());
        $deal->desc_long = trim(pq('#product-info ul')->text());
        $deal->pictures = "h".pq('#main_pic')->attr('src')."g";
        
        $deal->shipping = '';
    }
}

?>