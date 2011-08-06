<?php defined('SYSPATH') OR die('No Direct Script Access');

Class Controller_Deals extends Controller_Template {
    public $template = 'base';

     public function action_index() {
        $today = date('Y-m-d');
        $view = View::factory('deals/show');
        $view->title = "OIAD";
        $deals = ORM::factory('deal');
        $view->deals = $deals->where('pub_date', '=', $today)->find_all();
        $this->template->content = $view;
    }
    
    public function action_showdeal() {
        $view = View::factory('deals/deal');
        $view->title = "OIAD";
        $deals = ORM::factory('deal');
        $deal_id = $this->request->param('id');
        $view->deal = $deals->where('id', '=', $deal_id)->find();
        $this->template->content = $view;
    }
}
