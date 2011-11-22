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
			$sites = $category->sites->where('active','=','T');
			$view->page_name = __("Sites from '").$category->name.__("' category");
		}
		else {
			$this->report_error("Error details: The category with the id '".$category_id."' does not exist!");
			return;
		}
	}
	else {
		$sites = ORM::factory('site')->where('active','=','T');
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
		->where('categories_sites.site_id', 'IS', NULL)->where('active','=','T');
		
    $view->sites = $sites->find_all();
	$view->page_name = __("Sites not assigned to a category");
		
    $this->template->content = $view;
  }

	public function action_olddeals()
	{
		$view = View::factory('reports/sites');
      
	    if(isset($_GET['days']))
	    {
	    	$days = $_GET['days'];
			if(!is_numeric($days) || $days <1)
			{
				$this->report_error("Error details: days parameter must be numeric and positive!");
				return;
			}
		
			$query = DB::query(Database::SELECT, 
				'SELECT sites.* FROM sites INNER JOIN
	(SELECT site, desc_short FROM deals GROUP BY site, desc_short 
	 HAVING MAX(pub_date) =CURDATE() and DATEDIFF(MAX(pub_date) , MIN(pub_date)) > :days) 
	 AS old_deals ON sites.id = old_deals.site WHERE active="T"');
	    	$query->param(':days', $days);
	    	$view->sites = $query->as_object()->execute();
			
			$view->page_name = __("Sites with deals not updated for a time");
				
		    $this->template->content = $view;
	    }
		else {
			$this->report_error("Error details: days parameter should be provided!");
				return;
		}
	}

	public function action_outofdate()
	{
		$view = View::factory('reports/sites');
      
		$query = DB::query(Database::SELECT, 
			'SELECT DISTINCT sites.* from sites INNER JOIN deals ON sites.id = deals.site INNER JOIN
(SELECT site, max(pub_date) AS max_pub_date FROM `deals` group by site) AS site_last_pub ON
deals.site = site_last_pub.site
WHERE deals.pub_date = site_last_pub.max_pub_date AND (deals.desc_short IS NULL OR deals.price IS NULL)
 AND active="T"');
    	$view->sites = $query->as_object()->execute();
		
		$view->page_name = __("Sites with out of date scrapers");			
	    $this->template->content = $view;	    		
	}
}
