<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.gooddeals18.com/category/deal_of_the_day/", new GoodDeals18());

class GoodDeals18 extends AbstractScraper {

	 public function scrape($host) {
        $items = Feed::parse('http://static.zoovy.com/rss/gooddeals18/DOTD.xml');
        //$item = $items[0];
    }
}

?>

