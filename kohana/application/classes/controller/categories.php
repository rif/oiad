<?php defined('SYSPATH') OR die('No Direct Script Access');

Class Controller_Categories extends Controller_Template {
    public $template = 'base';

     public function action_index() {
        $view = View::factory('categories/list');
        
        $cats = ORM::factory('category');
        $view->categories = $cats->find_all();
        $this->template->content = $view;
    }
    
    public function action_show() {
        $view = View::factory('categories/category');

        $view->category = ORM::factory('category', $this->request->param('id'));
        $this->template->content = $view;
    }
}
