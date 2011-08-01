<?php
defined('SYSPATH') OR die('No Direct Script Access');

require_once 'PolyFactory.php';

PolyFactory::addScrapper('http://www.5stardeal.com/', new FiveStarDealScrapper());

class FiveStarDealScrapper extends AbstractScrapper {

    protected function _fillDetails($deal, $host) {
        $deal->site_name = '5 Star Deal';
        $deal->desc_short = trim(pq('#dealHeadline')->text());
        $deal->price = pq('#dealPrice')->text();
        $deal->desc_long = trim(pq('#dailyDealDesc')->text());
        $deal->pictures = "h".$host.pq('#dealPicWrap img:first')->attr('src')."g";        
        $deal->shipping = pq('#freeShipping')->text();
    }
}

?>