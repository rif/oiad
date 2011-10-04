<?php defined('SYSPATH') OR die('No Direct Script Access');

require_once Kohana::find_file('classes', 'controller/login_controller');

Class Controller_Categories extends Controller_App {

  public $auth_required = array('admin');

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
      
  public function action_edit() {
      $view = View::factory('categories/edit')->set('values', $_POST)->bind('errors', $errors);
      $cat_id = $this->request->param('id');
      $cat = ORM::factory('category', $cat_id);
      if (!empty($_POST)) {
        try
        {
            $cat->values($_POST); 
            $cat->save();
            $this->request->redirect(URL::site('/categories/'));
        }
        catch (ORM_Validation_Exception $e)
        {
            $errors = $e->errors('models');
        }
      }
      $view->cat = $cat;
      $this->template->content = $view;
  }



  public function action_delete() {
      $cat_id = $this->request->param('id');
      $cat = ORM::factory('category', $cat_id);
      $cat->delete();
      $this->request->redirect(URL::site('/categories/index/'));
  }
}
