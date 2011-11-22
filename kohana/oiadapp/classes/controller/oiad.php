<?php defined('SYSPATH') OR die('No Direct Script Access');

class Controller_Oiad extends Controller_Template {

    public $template = 'base';

    public function action_index() {        
		$section = (isset($_GET['section']) && strlen($_GET['section'])) ? $_GET['section'] : 'deal-of-the-day';
		$category = (isset($_GET['category']) && strlen($_GET['category'])) ? $_GET['category'] : '';
		$items_per_page = (isset($_POST['items_per_page']) && strlen($_POST['items_per_page'])) ? $_POST['items_per_page'] : 0;		
		$auth = Auth::instance();
		$user = ORM::factory('user', $auth->get_user());
		
		if($items_per_page>0){
			Session::instance()->set('items_per_page', $items_per_page);
		} 		
		if(strlen($category)){
			$category = ORM::factory('category')->where('name','=',$category)->find();
			$sites = $category->sites;							
		} else {			
			$sites = ORM::factory('site');
		}
		
		// select prefered cities for coupons
		if($section == 'coupon-of-the-day'){
			$auth = Auth::instance();
			$cities = null;			
			if($auth->logged_in()!= 0){					
				// if logged=in get preffered cities				
            	$user =ORM::factory('user', $auth->get_user());
				$preferences = ORM::factory('preference')->where('user','=',$user->id)->find();
				$cities = $preferences->cities;
			} 
			if($auth->logged_in() == 0 || !strlen($cities)){		
				// else get location by ip
				include_once Kohana::find_file('classes', 'vendor/geoipcity', 'inc');
    			$gi = geoip_open(Kohana::find_file('classes', 'vendor/GeoLiteCity','dat'),GEOIP_STANDARD);                
    			$record = geoip_record_by_addr($gi,Request::$client_ip);
				geoip_close($gi);
				if($record){
					$cities = $record->city;
				}
			}		
			if ($cities){
				$cities = explode("|", trim($cities, '|'));
				$sites = $sites->where('city', 'in', $cities);				
			}	
		}

		// select prefered sites 
		if	($section == 'items-of-the-day'){
			$sites = $user->sites->find_all();
		} else {
			// all sites remain in this section (after categrory and cities have been filtered)
        	$sites = $sites->where('type','=',$section)->find_all();
		}
			
		$deals = array();
		foreach($sites as $site) {
			if($site->active != 'T') continue;
    		$query = DB::query(Database::SELECT, 'select * from deals where site=:site_id and pub_date=(select max(pub_date) from deals where site=:site_id)');
    		$query->param(':site_id', $site->id);
    		$result = $query->execute();
			foreach ($result as $d) {
				array_push($deals, array($site,$d));
			}
		}
						
		$pagination = new Pagination(array(
			'total_items' => count($deals),	
			'count_in' => 3,
			'items_per_page' => Session::instance()->get('items_per_page', 15) // default items per page in 9			
		));		
			
		//$result = $sites->limit($pagination->items_per_page)->offset($pagination->offset)->find_all();
		$result = array_slice($deals, $pagination->offset, $pagination->items_per_page);
						
		$this->template->content = View::factory('oiad/list')
			->set('deals', $result)
			->set('user', $user)
			->set('paging', $pagination)
			->set('all', sizeof($deals));
    }        

    public function action_location() {    	       
        include_once Kohana::find_file('classes', 'vendor/geoipcity', 'inc');
        $gi = geoip_open(Kohana::find_file('classes', 'vendor/GeoLiteCity','dat'),GEOIP_STANDARD);		                
        $this->template->content = View::factory('oiad/location')
			->set('your_ip', Request::$client_ip)
			->set('record', geoip_record_by_addr($gi,Request::$client_ip));
		geoip_close($gi);				
    }
	
	public function action_showdeal() {
 	$this->template->content = View::factory('oiad/deal')
		->set('deal', ORM::factory('deal', $this->request->param('id')));
  }
}
?>
