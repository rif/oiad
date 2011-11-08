<?php defined('SYSPATH') OR die('No Direct Script Access');


class Controller_Preferences extends Controller_App {

	public $template = 'blank';
	
	public function action_index() {    
	    $auth = Auth::instance();            
	    $user = ORM::factory('user', $auth->get_user());
		$pref = ORM::factory('preference')->where('user','=',$user->id)->find();
		
		if (!empty($_POST)) {                  
		  $pref->user = $user;		
		  $pref->cities = $_POST['cities'];
		  $pref->save();      
		  return;
		}
		$sites = ORM::factory('site')->where('is_deal','=','T')->select('city')->distinct(true)->order_by('city')->find_all();
		$c = array();
		foreach($sites as $site){
		  $city = ucwords(trim($site->city));
		  if($city && !in_array($city,$c)) array_push($c, $city);
		}    
		$this->template->content = View::factory('preferences/edit')
			->set('cities', $c)
			->set('pref', $pref); 
	}
	
	public function action_markmysite(){
		$site_id = $this->request->param('id');		
		$auth = Auth::instance();
		if($auth->logged_in() != 0){
			$user =ORM::factory('user', $auth->get_user());
			if(!$user->has('sites', $site_id)){
				$user->add('sites', $site_id);	
			}			
			$this->template->content = View::factory('preferences/favorite');
		}									
	}

	public function action_unmarkmysite(){
		$site_id = $this->request->param('id');		
		$auth = Auth::instance();
		if($auth->logged_in() != 0){
			$user =ORM::factory('user', $auth->get_user());
			if($user->has('sites', $site_id)){
				$user->remove('sites', $site_id);	
			}			
			$this->template->content = View::factory('preferences/favorite');
		}									
	}
}
?>