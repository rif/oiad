<?php defined('SYSPATH') OR die('No Direct Script Access'); ?>

<?php
 class Controller_Admin_User extends Useradmin_Controller_Admin_User {
 	
   	public function action_index()
	{
		// set the template title (see Controller_App for implementation)
		$this->template->title = __('User administration');
		
		// create a user
		$user = ORM::factory('user');
		
		$search_text = isset($_GET['q'])? $_GET['q']: '';
		if($search_text != '')
		{
			$not_allowed_chars = array('%', '_');
			$search_text = str_replace($not_allowed_chars, '', $search_text);
			$user = $user
				->where_open()
				->where('username','LIKE','%'.$search_text.'%')
				->or_where('email','LIKE','%'.$search_text.'%')
				->where_close();
		}
		
		// This is an example of how to use Kohana pagination
		// Get the total count for the pagination
		// the user has to be cloned because the count_all deletes the where conditions
		$duplicate_user = clone $user;
		$total = $duplicate_user->count_all();
		
		// Create a paginator
		$pagination = new Pagination(array(
		    'current_page'      => array('source' => 'query_string', 'key' => 'page'),  // source: "query_string" or "route"
			'total_items' => $total, 
			'items_per_page' => 10,  // set this to 30 or 15 for the real thing, now just for testing purposes...
			'auto_hide' => false, 
			'view' => 'pagination/useradmin'
		));
		// Get the items for the querykohana/modules/useradmin/views/user/admin/index.php
		$sort = isset($_GET['sort']) ? $_GET['sort'] : 'username'; // set default sorting direction here
		$dir = isset($_GET['dir']) ? 'DESC' : 'ASC';
		$result = $user->limit($pagination->items_per_page)
			->offset($pagination->offset)
			->order_by($sort, $dir)
			->find_all();

		// render view
		// pass the paginator, result and default sorting direction
		$this->template->content = View::factory('user/admin/index')
			->set('users', $result)
			->set('paging', $pagination)
			->set('default_sort', $sort);
	}
   
 }
?>