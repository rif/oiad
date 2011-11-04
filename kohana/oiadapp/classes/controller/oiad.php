<?php defined('SYSPATH') OR die('No Direct Script Access');

class Controller_Oiad extends Controller_Template {

    public $template = 'base';

    public function action_index() {        
		$section = (isset($_GET['section']) && strlen($_GET['section'])) ? $_GET['section'] : 'deal-of-the-day';
		$category = (isset($_GET['category']) && strlen($_GET['category'])) ? $_GET['category'] : '';
		$items_per_page = (isset($_POST['items_per_page']) && strlen($_POST['items_per_page'])) ? $_POST['items_per_page'] : 0;
		
		if($items_per_page>0){
			Session::instance()->set('items_per_page', $items_per_page);
		} 		
		if(strlen($category)){
			$category = ORM::factory('category')->where('name','=',$category)->find();
			$sites = $category->sites;
			if($category == 'coupon-of-the-day'){
				$auth = Auth::instance();
				$cities = null;			
				if($auth->logged_in()!= 0){
					// if logged=in get preffered cities				
                	$user =ORM::factory('user', $auth->get_user());
					$preferences = ORM::factory('preference')->where('user','=',$user->id)->find();
					$cities = $preferences->cities;
				} else {
					// else get location by ip
					include_once Kohana::find_file('classes', 'vendor/geoipcity', 'inc');
        			$gi = geoip_open(Kohana::find_file('classes', 'vendor/GeoLiteCity','dat'),GEOIP_STANDARD);                
        			$record = geoip_record_by_addr($gi,Request::$client_ip);
					geoip_close($gi);
					$cities = $record->city;
				}
				if ($cities){
					$sites = $sites->where('city','=',$cities);
				}	
			}				
		} else {			
			$sites = ORM::factory('site');
		}			
        $sites = $sites->where('type','=',$section)->find_all();
		$today = date('Y-m-d');
			
		$deals = array();
		foreach($sites as $site) {          		
    		$dd = $site->deals->where('pub_date', '=', $today)->find_all();
			foreach ($dd as $d) {
				array_push($deals, $d);
			}
		}
						
		$pagination = new Pagination(array(
			'total_items' => count($deals),	
			'count_in' => 3,
			'items_per_page' => Session::instance()->get('items_per_page', 9) // default items per page in 9			
		));		
			
		//$result = $sites->limit($pagination->items_per_page)->offset($pagination->offset)->find_all();
		$result = array_slice($deals, $pagination->offset, $pagination->items_per_page);
						
		$this->template->content = View::factory('oiad/list')
			->set('deals', $result)
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
