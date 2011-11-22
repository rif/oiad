<?php defined('SYSPATH') OR die('No Direct Script Access');


class Controller_Reports extends Controller_App {

  public $auth_required = array('admin');

	//list all categories
  public function action_index() {	
	$view = View::factory('reports/categories');
      
    $cats = ORM::factory('category');
    $view->categories = $cats->find_all();
		
    $this->template->content = $view;
  }

  public function action_sites() {
    $view = View::factory('reports/sites');

	if(isset($_GET['cid']))
	{
		if(!is_numeric($_GET['cid']))
		{
			$this->report_error("Error details: If you provide 'cid', this must be numeric!");
			return;
		}
		
		$category_id = $_GET['cid'];
		$category = ORM::factory('category', $category_id);
		
		if($category->loaded() == TRUE)
		{
			$sites = $category->sites;
			$view->page_name = __("Sites from '").$category->name.__("' category");
		}
		else {
			$this->report_error("Error details: The category with the id '".$category_id."' does not exist!");
			return;
		}
	}
	else {
		$sites = ORM::factory('site');
		$view->page_name = __("All sites");
	}
	   
    $view->sites = $sites->find_all();
    $this->template->content = $view;
  }

	private function report_error($error_msg)
	{
		$view = View::factory('reports/error');
		$view->message = $error_msg;
		$this->template->content = $view;
	}

  public function action_categoryless() {
    $view = View::factory('reports/sites');
      
    $sites = ORM::factory('site')->join('categories_sites', 'LEFT')
    	->on('site.id', '=', 'categories_sites.site_id')
		->where('categories_sites.site_id', 'IS', NULL);
		
    $view->sites = $sites->find_all();
	$view->page_name = __("Sites not assigned to a category");
		
    $this->template->content = $view;
  }


}
