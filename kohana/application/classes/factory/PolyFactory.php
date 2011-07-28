<?php

defined('SYSPATH') OR die('No Direct Script Access');
require_once(Kohana::find_file('vendor', 'phpQuery'));

class PolyFactory {

    private static $scrappers = array();

    public static function addScrapper($site, $scrapper) {
        self::$scrappers[$site] = $scrapper;
    }

    public static function getScrapper($site) {        
        if (array_key_exists($site, self::$scrappers)) {
            return self::$scrappers[$site];
        }
        return Null;
    }


}

?>
