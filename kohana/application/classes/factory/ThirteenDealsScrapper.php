<?php
defined('SYSPATH') OR die('No Direct Script Access');

require_once 'PolyFactory.php';

PolyFactory::addScrapper('http://www.13deals.com/', new ThirteenScrapper());

class ThirteenScrapper extends AbstractScrapper {

    protected function _fillDetails($deal, $host) {
        $deal->site_name = '13 Deals';
        $deal->desc_short = trim(pq('.prodheader')->text());
        $deal->price = pq('p.lrgorange')->text();
        $deal->desc_long = trim(pq('object:eq(1)>param:first')->attr('value'));
        $deal->pictures = "h".$host.pq('table:eq(6) img:first')->attr('src')."g";
        $deal->shipping = pq('p.lrgorange')->text();;
    }
}

?>

