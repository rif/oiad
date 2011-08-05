<?php
defined('SYSPATH') OR die('No Direct Script Access');


PolyFactory::addScrapper('https://1saleaday.com/watch', new OneSaleADayWatchScrapper());

class OneSaleADayWatchScrapper extends AbstractScrapper {

    protected function _fillDetails($deal, $host) {
        $deal->site_name = '1 Sale A Day Watch';
        $deal->desc_short = trim(pq('#left_col_featured_product_summary>h1:first')->text());
        $deal->price = pq('p.blue_price_highlight')->text();
        $deal->desc_long = trim(pq('div.product_details_text>p')->text());
        $deal->pictures = "h".pq('#product_image>img')->attr('src')."g";
        
        $deal->shipping = '';
    }
}

?>