<?php
defined('SYSPATH') OR die('No Direct Script Access');

require_once 'PolyFactory.php';

PolyFactory::addScrapper('http://www.2dailydeals.com/', new TwoDailyDealsScrapper());

class TwoDailyDealsScrapper extends AbstractScrapper {

    protected function _fillDetails($deal, $host) {
        $deal->site_name = '2 Daily Deals';
        $deal->desc_short = trim(pq('.product-name')->text());
        $deal->price = pq('div.second-price')->text();
        $deal->desc_long = trim(pq('div.short-description>p:first')->text());
        $deal->pictures = "h".pq('#image img')->attr('src')."g";
        $deal->shipping = pq('div.shipping-price')->text();
    }
}

?>