<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper('http://www.atgstores.com/dailyDeals/', new ATGSToresScrapper());

class ATGSToresScrapper extends AbstractScrapper {

    protected function _fillDetails($deal, $host) {
        $deal->site_name = 'ATG Stores';
        $deal->desc_short = trim(pq('.itemTitle')->text());
        $deal->price = trim(pq('span[style="font-size:26pt; color:#ffffff;"]')->text());
        $deal->desc_long = trim(pq('font[face="arial"]')->text());
        $deal->pictures = "h".pq('img.productImg')->attr('src')."g";
        
        $deal->shipping = trim(pq('.ship')->text());
    }
}

?>