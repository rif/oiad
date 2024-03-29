<?php defined('SYSPATH') OR die('No Direct Script Access');


class Controller_Sites extends Controller_App {

  public $auth_required = array('admin');

  public function action_index() {
    $view = View::factory('sites/list');
    if (!empty($_POST)) {
      $saved = 0;
      $sites = ORM::factory('site');
      foreach(explode("\n", $_POST['pages']) as $page){
      	$this_site = $sites->where('page', '=', $page)->find_all();
      	if(count($this_site) == 0){
      	  $site = ORM::factory('site');
      	  $site->page = $page;
      	  $site->save();
      	  $saved++;
      	}
      }
    }

    $view->title = "OIAD";
    $sites = ORM::factory('site');
    $view->sites = $sites->find_all();
    $this->template->content = $view;
  }

  public function action_scrape() {
    $view = View::factory('sites/scrape');
    $site_id = $this->request->param('id');
    $view->content = '';
    if($site_id != '') {
      $view->content .= Request::factory("scrape/index/".$site_id)->execute()->body();
    } else {
      $view->content .= Request::factory("scrape/all")->execute()->body();
    }
    $this->template->content = $view;
  }

  public function action_scrape_expired() {
    $view = View::factory('sites/scrape');
    $view->content = Request::factory("scrape/expired")->execute()->body();
    $this->template->content = $view;
  }

  public function action_edit() {
    $view = View::factory('sites/edit')->set('values', $_POST)->bind('errors', $errors);
    $site_id = $this->request->param('id');
    $site = ORM::factory('site', $site_id);
    if (!empty($_POST)) {
      try
      {
      	  $site->values($_POST);
      	  if(!array_key_exists('active', $_POST)) $site->active = 'F';
          if(!array_key_exists('is_deal', $_POST)) $site->is_deal = 'F';
      	  $site->save();
      	  $this->request->redirect(URL::site('/sites'));
      }
      catch (ORM_Validation_Exception $e)
      {
      	  $errors = $e->errors('models');
      }
    }
    $query = DB::query(Database::SELECT, 'select * from deals where site=:site_id and pub_date=(select max(pub_date) from deals where site=:site_id)');
    $query->param(':site_id', $site->id);
    $view->deals = $query->as_object()->execute();
    $view->site = $site;
    $this->template->content = $view;
  }

  public function action_delete() {
    $site_id = $this->request->param('id');
    $site = ORM::factory('site', $site_id);
    $site->delete();
  }

  public function action_toggleactive(){
    $site_id = $this->request->param('id');
    $site = ORM::factory('site', $site_id);
    $site->active = $site->active == 'T' ? 'F' : 'T';
    $site->save();
    $this->template->content = '';
  }

  public function action_remove_category() {
    $site_id = $this->request->param('id');
    $cat_id = $this->request->param('cid');
    $site = ORM::factory('site', $site_id);
    $cat = ORM::factory('category', $cat_id);
    if($site->has('categories', $cat)){
      $site->remove('categories', $cat);
    }
    $this->request->redirect(URL::site('/sites/edit/'.$site_id));
  }

  public function action_add_category() {
    $site_id = $this->request->param('id');
    $cat_id = $this->request->param('cid');
    $site = ORM::factory('site', $site_id);
    $cat = ORM::factory('category', $cat_id);
    if(!$site->has('categories', $cat)){
      $site->add('categories', $cat);
    }
    $this->request->redirect(URL::site('/sites/edit/'.$site_id));
  }
  
  public function action_showdeal() {
 	$this->template->content = View::factory('sites/deal')
		->set('deal', ORM::factory('deal', $this->request->param('id')));
  }
}
