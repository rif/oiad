<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper('http://www.alphashark.com/', new AlphaSharkScrapper());

class AlphaSharkScrapper extends AbstractScrapper {

    protected function _fillDetails($deal, $host) {
        $deal->site_name = 'AlphaShark';
        $deal->desc_short = trim(pq('#rightcol>h2:first')->text());
        $deal->price = pq('div.cost')->text();
        $deal->desc_long = trim(pq('div.specs')->text());
        $deal->pictures = "h".pq('#div[id^="__main"]>a>img')->attr('src')."g";
        
        $deal->shipping = '';
    }
}

?>