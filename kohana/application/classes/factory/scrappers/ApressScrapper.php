<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper('http://www.apress.com/dailydeal/', new ApressScrapper());

class ApressScrapper extends AbstractScrapper {

    protected function _fillDetails($deal, $host) {
        $deal->site_name = 'Apress';
        $deal->desc_short = trim(pq('.product-name>h1:first')->text());
        $deal->price = trim(pq('.prices>li:nth-child(2)')->text());
        $deal->desc_long = trim(pq('div.short-description')->text());
        $deal->pictures = "h".pq('p.product-image>img')->attr('src')."g";
        
        $deal->shipping = '';
    }
}

?>