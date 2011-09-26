<?php defined('SYSPATH') OR die('No Direct Script Access');

class Controller_Oiad extends Controller_Template {

  public $template = 'frontend';

 public function action_index() {
        $view = View::factory('oiad/list');
        
        $deals = ORM::factory('deal');
        $today = date('Y-m-d');
        $view->deals = $deals->where('pub_date', '=', $today)->find_all();
        $this->template->content = $view;
    }
}
?>