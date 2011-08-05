<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper('http://www.abazias.com/dealoftheday.asp', new AbaziasScrapper());

class AbaziasScrapper extends AbstractScrapper {

    protected function _fillDetails($deal, $host) {
        $deal->site_name = 'Abazias';
        $deal->desc_short = trim(pq('#copy_left>h2')->text());
        $deal->price = pq('')->text();
        $deal->desc_long = trim(pq('')->text());
        $deal->pictures = "h".pq('')->attr('src')."g";
        
        $deal->shipping = '';
    }
}

?>