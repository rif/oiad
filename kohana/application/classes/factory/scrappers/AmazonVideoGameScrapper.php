<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper('http://www.amazon.com/gp/feature.html/ref=amb_link_85826191_2?ie=UTF8&docId=1000208101&pf_rd_m=ATVPDKIKX0DER&pf_rd_s=right-blog-0&pf_rd_r=1839MMT7K9ZBZ5PT4YEE&pf_rd_t=101&pf_rd_p=1277833802&pf_rd_i=468642', new AmazonVideoGameScrapper());

class AmazonVideoGameScrapper extends AbstractScrapper {

    protected function _fillDetails($deal, $host) {
        $deal->site_name = 'Amazon Video Game';
        $deal->desc_short = trim(pq('.productList>a:first')->text());
        $deal->price = trim(pq('.productList b.price')->text());
        $deal->desc_long = '';
        echo "img:"."h".pq('img.hoverZoomLink')->attr('src')."g";
        $deal->pictures = "h".pq('img.hoverZoomLink')->attr('src')."g";
        
        $deal->shipping = '';
    }
}

?>