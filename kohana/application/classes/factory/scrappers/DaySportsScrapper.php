<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper('http://www.1daysports.com/', new DaySportScrapper());

class DaySportScrapper extends AbstractScrapper {

    protected function _fillDetails($deal, $host) {
        $deal->site_name = '1 Day Sports';
        $deal->desc_short = trim(pq('#title')->text());
        $deal->price = pq('#price')->text();
        $deal->shipping = "See description";
        $deal->desc_long = trim(pq('#description')->text());
        $deal->pictures = "h".pq('#image>img')->attr('src')."g";
    }

}

?>