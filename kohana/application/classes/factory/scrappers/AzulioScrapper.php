<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper('http://www.azulio.com/dailydeal/', new AzulioScrapper());

class AzulioScrapper extends AbstractScrapper {

    protected function _fillDetails($deal, $host) {
        $deal->site_name = 'azulio';
        $deal->desc_short = trim(pq('.ProductMain>div:first')->text());
        $deal->price = trim(pq('.ProductPrice')->text());
        $deal->desc_long = trim(pq('.ProductDescriptionContainer')->text());
        $deal->pictures = "h".pq('a.hoverZoomLink>img:first')->attr('src')."g";
        
        $deal->shipping = 'See description';
    }
}

?>