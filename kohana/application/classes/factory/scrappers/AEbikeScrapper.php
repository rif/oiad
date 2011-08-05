<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper('http://www.aebike.com/get/deal/', new AEbikeScrapper());

class AEbikeScrapper extends AbstractScrapper {

    protected function _fillDetails($deal, $host) {
        $deal->site_name = 'Alfred E Bike';
        $deal->desc_short = trim(pq('h1>div')->text());
        $deal->price = pq('div.sespecialprice')->text();
        $deal->desc_long = trim(pq('td.seitemcontent>ul')->text());
        $h = parse_url($host);
        $deal->pictures = "hhttp://".$h['host'].pq('div.seimagecaption>img')->attr('src')."g";
        
        $deal->shipping = '';
    }
}

?>