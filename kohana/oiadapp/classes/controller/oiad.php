<?php defined('SYSPATH') OR die('No Direct Script Access');

class Controller_Oiad extends Controller_Template {

    public $template = 'base';

    public function action_index() {
        $view = View::factory('oiad/list');
		$section = (isset($_GET['section']) && strlen($_GET['section'])) ? $_GET['section'] : 'deal-of-the-day';
		$category = (isset($_GET['category']) && strlen($_GET['category'])) ? $_GET['category'] : '';
         /*$pagination = new Pagination(array(
			'total_items' => $total, 
			'items_per_page' => 9,  // set this to 30 or 15 for the real thing, now just for testing purposes...
			'auto_hide' => false,			
		));
		$result = $user->limit($pagination->items_per_page)
			->offset($pagination->offset)
			->order_by($sort, $dir)
			->find_all();*/
			
		if(strlen($category)){
			$category = ORM::factory('category')->where('name','=',$category)->find();
			$sites = $category->sites;	
		} else {			
			$sites = ORM::factory('site');
		}	
        $sites = $sites->where('type','=',$section)->where('is_deal','=','F')->find_all();
       	/*$this->template->content = View::factory('user/admin/index')
			->set('users', $result)
			->set('paging', $pagination)
			->set('default_sort', $sort);*/
		$view->sites = $sites;
        $this->template->content = $view;
    }        

    public function action_location() {
        $view = View::factory('oiad/location');

        include_once Kohana::find_file('classes', 'vendor/geoipcity', 'inc');
        $gi = geoip_open(Kohana::find_file('classes', 'vendor/GeoLiteCity','dat'),GEOIP_STANDARD);
        $view->record = geoip_record_by_addr($gi,"89.123.151.196");
        geoip_close($gi);
        $this->template->content = $view;
    }
}
?>
