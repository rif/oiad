<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper('http://appledod.com/', new AppledodScrapper());

class AppledodScrapper extends AbstractScrapper {

    protected function _fillDetails($deal, $host) {
        $deal->site_name = 'Apple DOD';
        $deal->desc_short = trim(pq('.product-name>h2:first')->text());
        $deal->price = trim(pq('.price')->text());
        $deal->desc_long = trim(pq('.short-description std')->text());
        $deal->pictures = "h".pq('#bigImage')->attr('src')."g";
        $deal->shipping = trim(pq('p.welcome-msg')->text());
    }
}

?>