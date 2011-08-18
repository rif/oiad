<?php

defined('SYSPATH') OR die('No Direct Script Access');
require_once Kohana::find_file('classes', 'factory/PolyFactory');
require_once Kohana::find_file('classes', 'factory/AbstractScrapper');

foreach (Kohana::list_files('classes/factory/scrappers') as $filename) {
    require_once $filename;
}

Class Controller_Sites extends Controller_Template {

  public $template = 'base';

  public function action_index() {
    $view = View::factory('sites/list');
    if (!empty($_POST)) {
      $saved = 0;
      $sites = ORM::factory('site');
      foreach(explode("\n", $_POST['pages']) as $page){
	$this_site = $sites->where('page', '=', $page)->find();
			
	if(count ($this_site) == 0){
	  $site = ORM::factory('site');
	  $site->page = $page;
	  $site->save();
	  $saved++;
	}        
      }
      if($saved == 0) {
	echo "Nothing new!";
      }
    }

    $view->title = "OIAD";
    $sites = ORM::factory('site');
    $view->sites = $sites->find_all();
    $this->template->content = $view;
  }
    
  public function action_scrapp() {
    $view = View::factory('sites/scrapp');
    $site_id = $this->request->param('id');
    $view->content = '';
    if($site_id != '') {
      $view->content .= Request::factory("scrapp/index/".$site_id)->execute()->body();
    } else {
      $sites = $sites->where('active', '=', 'T')->find_all();
			
      $index = 1;
      foreach ($sites as $site) {
	$scrapper = PolyFactory::getScrapper($site->page);
	if ($scrapper) {
	  $deal_id = $scrapper->scrapp($site);
	  if(is_numeric($deal_id)){
	    $view->content .= ($index++).". ".HTML::anchor('/deals/showdeal/'.$deal_id, $site->page)."<br />";
	  } else {
	    $view->content .= "scrapp failed for ".$site->page." reason:".$deal_id."<br />";
	  }					
	}
      }
    }
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
	  if(!array_key_exists('active', $_POST)) {
	    $site->active = 'F';
	  }
	  $site->save();
	  $this->request->redirect(URL::site('/'));
	}
      catch (ORM_Validation_Exception $e)
	{
	  $errors = $e->errors('models');
	}
    }
    $view->site = $site;
    $this->template->content = $view;
  }
	
  public function action_toggleactive(){
    $site_id = $this->request->param('id');
    $site = ORM::factory('site', $site_id); 
    $site->active = $site->active == 'T' ? 'F' : 'T';
    $site->save();
    $this->template->content = '';
  }
}
