<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper('http://awatchforyou.com/', new AWatchForYouScrapper());

class AWatchForYouScrapper extends AbstractScrapper {

    protected function _fillDetails($deal, $host) {
        $deal->site_name = 'A Watch For You';
        $deal->desc_short = trim(pq('span.products_heading')->text());
        $deal->price = pq('span.txt_our_price')->text();
        $deal->desc_long = trim(pq('span.txt_description_home')->text());
        $deal->pictures = "h".$host.pq('img[src*="ProductImage1.jpg"]')->attr('src')."g";
        
        $deal->shipping = 'See description';
    }
}

?>