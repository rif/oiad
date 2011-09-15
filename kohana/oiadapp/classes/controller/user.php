<?php defined('SYSPATH') OR die('No Direct Script Access');
class Controller_User extends Controller_Template {

  public $template = 'base';

  public function action_register() {
    $view = View::factory('user/register');
    if (!empty($_POST)) {
      $user = ORM::factory('user')->create_user($_POST, array(
          'username',
          'password',
          'email',
      ));
    }

    $view->title = "OIAD Create User";
    $sites = ORM::factory('site');
    $view->sites = $sites->find_all();
    $this->template->content = $view;
  }
}
?>