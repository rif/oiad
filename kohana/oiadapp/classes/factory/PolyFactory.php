<?php

defined('SYSPATH') OR die('No Direct Script Access');

class PolyFactory {

    private static $scrapers = array();

    public static function addScraper($site, $scraper) {
        self::$scrapers[$site] = $scraper;
    }

    public static function getScraper($site) {
        if (array_key_exists($site, self::$scrapers)) {
            return self::$scrapers[$site];
        }
        return Null;
    }
}

?>
