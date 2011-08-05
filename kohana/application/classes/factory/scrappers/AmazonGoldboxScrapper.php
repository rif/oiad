<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper('http://www.amazon.com/gp/goldbox', new AmazonGoldBoxScrapper());

class AmazonGoldBoxScrapper extends AbstractScrapper {

    protected function _fillDetails($deal, $host) {
        $deal->site_name = 'Amazon Gold Box';
        $deal->desc_short = trim(pq('.gbox-dotd-container>a:first')->text());
        $deal->price = trim(pq('#gbox-dotd-promo-price')->text());
        $deal->desc_long = trim(pq('#gbox-dotd-descr>div')->text());
        $deal->pictures = "h".pq('img.gbox-img')->attr('src')."g";
        
        $deal->shipping = '';
    }
}

?>