<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper('http://www.allheart.com/ko123clearance.html?_s_icmp=DOTD', new AllHeartScrapper());

class AllHeartScrapper extends AbstractScrapper {

    protected function _fillDetails($deal, $host) {
        $deal->site_name = 'allheart';
        $deal->desc_short = trim(pq('#v3product-detail>h1:first')->text());
        $deal->price = pq('#v3-product-detail .v3price>strong')->text();
        $deal->desc_long = trim(pq('#v3pane1>p')->text());
        $deal->pictures = "h".pq('#v3-product-images>img')->attr('src')."g";
        $deal->shipping = '';
    }
}

?>