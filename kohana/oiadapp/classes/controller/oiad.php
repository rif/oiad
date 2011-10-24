<?php defined('SYSPATH') OR die('No Direct Script Access');

class Controller_Oiad extends Controller_Template {

    public $template = 'base';

    public function action_index() {        
		$section = (isset($_GET['section']) && strlen($_GET['section'])) ? $_GET['section'] : 'deal-of-the-day';
		$category = (isset($_GET['category']) && strlen($_GET['category'])) ? $_GET['category'] : '';         
			
		if(strlen($category)){
			$category = ORM::factory('category')->where('name','=',$category)->find();
			$sites = $category->sites;	
		} else {			
			$sites = ORM::factory('site');
		}	
        $sites = $sites->where('type','=',$section);
		$total = 9;//$sites->count_all();
		$pagination = new Pagination(array(
			'total_items' => $total, 
			'items_per_page' => 9,
			'auto_hide' => false,			
		));
		$result = $sites->limit($pagination->items_per_page)
			->offset($pagination->offset)			
			->find_all();       	
		
		$this->template->content = View::factory('oiad/list')
			->set('sites', $result)
			->set('paging', $pagination);         
    }        

    public function action_location() {        
        include_once Kohana::find_file('classes', 'vendor/geoipcity', 'inc');
        $gi = geoip_open(Kohana::find_file('classes', 'vendor/GeoLiteCity','dat'),GEOIP_STANDARD);                
        $this->template->content = View::factory('oiad/location')
			->set('record', geoip_record_by_addr($gi,"89.123.151.196"));
		geoip_close($gi);
    }
}
?>
