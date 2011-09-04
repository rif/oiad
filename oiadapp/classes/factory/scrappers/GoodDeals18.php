<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.gooddeals18.com/category/deal_of_the_day/", new GoodDeals18());

class GoodDeals18 extends AbstractScrapper {

	 public function scrapp($host) {
        $items = Feed::parse('http://static.zoovy.com/rss/gooddeals18/DOTD.xml');
        //$item = $items[0];
 		print_r($items);
    }
}

?>

