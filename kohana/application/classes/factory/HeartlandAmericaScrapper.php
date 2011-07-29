<?php

defined('SYSPATH') OR die('No Direct Script Access');
require_once 'PolyFactory.php';


PolyFactory::addScrapper('www.heartlandamerica.com', new HeartlandAmericaScrapper());

class HeartlandAmericaScrapper extends AbstractScrapper {
    const rss_link = "http://www.heartlandamerica.com/feeds/rssFeeds/whatsnew.xml";

    public function scrapp($host, $rss) {
        $items = Feed::parse($rss);

        foreach ($items[0] as $key => $val) {
            echo "<b>" . $key . "</b> = " . $val . "<br />";
        }
    }

}

?>
