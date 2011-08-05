<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper('http://www.americanmusical.com/RSS_Feeds/Ndnd.aspx', new AmericanMusicalScrapper());

class AmericanMusicalScrapper extends AbstractScrapper {

    protected function _fillDetails($deal, $host) {
        $deal->site_name = 'American Musical Supply';
        $deal->desc_short = trim(pq('div.textboxndnd>a')->text());
        $deal->price = trim(pq('.ndndsaleprices:first')->text());
        $deal->desc_long = trim(pq('.ndndinfort:text')->text());
        $deal->pictures = "h".pq('.ndndimage>a>img:first')->attr('src')."g";
        
        $deal->shipping = '';
    }
}

?>