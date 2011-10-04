<?php defined('SYSPATH') OR die('No Direct Script Access');

class Controller_Admin extends Controller_Template {

  public $template = 'backend';
  public $auth_required = array('admin');

  public function before() {
    parent::before();

    #Open session
    $this->session= Session::instance();

    if ($this->auth_required != FALSE && Auth::instance()->logged_in($this->auth_required) == FALSE) {
      if (Auth::instance()->logged_in()){
        echo "Permission denied!";
        $this->request->redirect('/sites');
      } else {
        $this->request->redirect('user/login');
      }
    }
  }
}
?>