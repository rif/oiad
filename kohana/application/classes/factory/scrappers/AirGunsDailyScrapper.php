<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper('http://www.airgunsdaily.com/', new AirGunsDailyScrapper());

class AirGunsDailyScrapper extends AbstractScrapper {

    protected function _fillDetails($deal, $host) {
        $deal->site_name = 'Airguns Daily';
        $deal->desc_short = trim(pq('#product')->text());
        $deal->price = pq('#sidebar_item_price>span')->text();
        $deal->desc_long = trim(pq('#description')->text());
        $deal->pictures = "h".pq('#featured_image')->attr('src')."g";
        
        $deal->shipping = '';
    }
}

?>