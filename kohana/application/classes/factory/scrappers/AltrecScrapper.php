<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper('http://outlet.altrec.com/', new AltrecScrapper());

class AltrecScrapper extends AbstractScrapper {

    protected function _fillDetails($deal, $host) {
        $deal->site_name = 'Altrec';
        $deal->desc_short = trim(pq('h1.detailBH1>b')->text());
        $deal->price = pq('span.salePrice:first')->text();
        $deal->desc_long = trim(pq('div.product_details_text>p')->text());
        $deal->pictures = "h".pq('img#swatchImage')->attr('src')."g";
        $deal->shipping = trim(pq('#tempId_22>a')->text());
    }
}

?>