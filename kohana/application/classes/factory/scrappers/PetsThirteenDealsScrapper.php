<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper('http://pets.13deals.com/', new PetsThirteenScrapper());

class PetsThirteenScrapper extends AbstractScrapper {

    protected function _fillDetails($deal, $host) {
        $deal->site_name = '13 Deals Pets';
        $deal->desc_short = trim(pq('.prodheader')->text());
        $deal->price = pq('p.lrgorange')->text();
        $deal->desc_long = '';
        $deal->pictures = "h".$host.pq('table:eq(6) img:first')->attr('src')."g";
        $deal->shipping = pq('p.lrgorange')->text();;
    }
}

?>

