<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper('http://www.asideofpeaches.com/', new SideOfPeachesScrapper());

class SideOfPeachesScrapper extends AbstractScrapper {

    public function scrapp($host) {
        $items = Feed::parse("http://www.asideofpeaches.com/index.php?main_page=rss_feed&feed=specials");
	$item = $items[0];
	$today = date('Y-m-d');
        $deal = ORM::factory('deal');
	$deal->where('site_link', '=', $host)->where('pub_date', '=', $today)->find();
	$deal->site_link=$host;
        $deal->item_link= $item['link'];
	$deal->site_name = 'A Side of Peaches';
        $deal->desc_short = $item['description'];
        $deal->price = $item['price'];
        $deal->desc_long = $item['description'];
        $deal->pictures = "h".$item['image_link']."g";  
        $deal->shipping = '';
	$deal->pub_date = $today;
	$deal->save();
    }

}
?>