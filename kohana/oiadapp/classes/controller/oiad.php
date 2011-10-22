<?php defined('SYSPATH') OR die('No Direct Script Access');

class Controller_Oiad extends Controller_Template {

    public $template = 'base';

    public function action_index() {
        $view = View::factory('oiad/list');
         /*$pagination = new Pagination(array(
			'total_items' => $total, 
			'items_per_page' => 9,  // set this to 30 or 15 for the real thing, now just for testing purposes...
			'auto_hide' => false,			
		));
		$result = $user->limit($pagination->items_per_page)
			->offset($pagination->offset)
			->order_by($sort, $dir)
			->find_all();*/
        $view->sites = ORM::factory('site')->where('is_deal','=','F')->find_all();
       	/*$this->template->content = View::factory('user/admin/index')
			->set('users', $result)
			->set('paging', $pagination)
			->set('default_sort', $sort);*/
        $this->template->content = $view;
    }
    
    public function action_deals() {
        $view = View::factory('oiad/list');
        
        $view->categories = ORM::factory('category')->find_all();
        $view->sites = ORM::factory('site')->where('is_deal','=','T')->find_all();
        
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
