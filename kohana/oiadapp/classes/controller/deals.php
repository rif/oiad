<?php defined('SYSPATH') OR die('No Direct Script Access');

Class Controller_Deals extends Controller_Template {
    public $template = 'backend';

     public function action_index() {
        $view = View::factory('deals/list');
        
        $deals = ORM::factory('deal');
        $today = date('Y-m-d');
        $view->deals = $deals->where('pub_date', '=', $today)->find_all();
        $this->template->content = $view;
    }
    
    public function action_showdeal() {
        $view = View::factory('deals/deal');

        $view->deal = ORM::factory('deal', $this->request->param('id'));
        $this->template->content = $view;
    }
}
