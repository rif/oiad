<?php
defined('SYSPATH') OR die('No Direct Script Access');

require_once 'PolyFactory.php';

PolyFactory::addScrapper('http://www.1dailydeal.com/', new OneDailyDealScrapper());

class OneDailyDealScrapper extends AbstractScrapper {

    protected function _fillDetails($deal, $host) {
        $deal->item_link="http://www.1dailydeal.com/Product_0.aspx";
        $deal->site_name = '1DailyDeal';
        $deal->desc_short = trim(pq('#mainDescr>h1')->text());
        $deal->price = pq('#mainDescr>h2')->text();
        $deal->shipping = trim(pq('#mainDescr>h3')->text());
        $deal->desc_long = trim(pq('#mainDescr>p')->text());
        $images = "<";
        
        foreach(pq('#mainImage>img') as $img){
            $old_src = pq($img)->attr('src');
            if(strlen($images) > 0){
                $images .= "|";
            }
            $img  = pq($img)->attr('src', $host."/".$old_src);
            $images .= $img->attr('src');
        }
        $images .= ">";
        $deal->pictures = $images;
    }

}

?>