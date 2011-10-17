<?php defined('SYSPATH') OR die('No Direct Script Access');


class Controller_Preferences extends Controller_App {

  public $template = 'blank';

  public function action_index() {
    $view = View::factory('preferences/edit');
    $auth = Auth::instance();            
    $user = ORM::factory('user', $auth->get_user());
    $pref = ORM::factory('preference')->where('user','=',$user->id)->find();
    
    if (!empty($_POST)) {                  
      $pref->user = $user;
      $pref->cities = implode('|',$_POST['cities']);
      $pref->save();      
      echo implode(', ',$_POST['cities']);      
      return;
    }
    $sites = ORM::factory('site')->where('is_deal','=','T')->select('city')->distinct(true)->order_by('city')->find_all();
    $c = array();
    foreach($sites as $site){
      $city = ucwords(trim($site->city));
      if($city && !in_array($city,$c)) array_push($c, $city);
    }
    $view->cities = $c;
    $view->pref = $pref;
    $this->template->content = $view;
  }
}
?>