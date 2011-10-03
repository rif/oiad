<?php defined('SYSPATH') OR die('No Direct Script Access');

class Controller_Oiad extends Controller_Template {

    public $template = 'frontend';

    public function action_index() {
        $view = View::factory('oiad/list');
        
        $view->categories = ORM::factory('category')->find_all();
        $view->sites = ORM::factory('site')->where('is_deal','=','F')->find_all();
        
        $this->template->content = $view;
    }
    
    public function action_deals() {
        $view = View::factory('oiad/list');
        
        $view->categories = ORM::factory('category')->find_all();
        $view->sites = ORM::factory('site')->where('is_deal','=','T')->find_all();
        
        $this->template->content = $view;
    }

    public function action_location() {
        include("geoipcity.inc");
        include("geoipregionvars.php");
        $gi = geoip_open("/usr/local/share/GeoIP/GeoIPCity.dat",GEOIP_STANDARD);

        $record = geoip_record_by_addr($gi,"24.24.24.24");
        print $record->country_code . " " . $record->country_code3 . " " . $record->country_name . "\n";
        print $record->region . " " . $GEOIP_REGION_NAME[$record->country_code][$record->region] . "\n";
        print $record->city . "\n";
        print $record->postal_code . "\n";
        print $record->latitude . "\n";
        print $record->longitude . "\n";
        print $record->metro_code . "\n";
        print $record->area_code . "\n";
        print $record->continent_code . "\n";

        geoip_close($gi);
    }
}
?>
