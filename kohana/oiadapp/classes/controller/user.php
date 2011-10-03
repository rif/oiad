<?php defined('SYSPATH') OR die('No Direct Script Access');

class Controller_User extends Controller_Template {

  public $template = 'frontend';

  function action_register()
  {
    #If user already signed-in
    if(Auth::instance()->logged_in()!= 0){
      #redirect to the user account
      $this->request->redirect('/');   
    }
 
    #Load the view
    $content = $this->template->content = View::factory('user/register');    
 
    #If there is a post and $_POST is not empty
    if ($_POST)
    {
      #Instantiate a new user
      $user = ORM::factory('user');     
      try {
        #If the post data validates using the rules setup in the user model
        #Affects the sanitized vars to the user object
        $user->values($_POST);

        #create the account
        $user->save();

        #Add the login role to the user
        $login_role = new Model_Role(array('name' =>'login'));
        $user->add('roles',$login_role);

        #sign the user in
        Auth::instance()->login($_POST['username'], $_POST['password'], true);

        #redirect to the user account
        $this->request->redirect('/');  
      } catch (ORM_Validation_Exception $e) {
        $errors = $e->errors('models');
      }
    }   
  }
 
  public function action_login()
  {
    #If user already signed-in
    if(Auth::instance()->logged_in()!= 0){
      #redirect to the user account
      $this->request->redirect('/');   
    }
 
    $content = $this->template->content = View::factory('user/login');  
 
    #If there is a post and $_POST is not empty
    if ($_POST)
    {
      $auth = Auth::instance();
 
      #Check Auth
      $status = $auth->login($_POST['username'], $_POST['password'], true);
 
      #If the post data validates using the rules setup in the user model
      if ($status)
      {   
        #redirect to the user account
        $this->request->redirect('/');
      }else
      {
        echo 'login failed!';
      }
    }
  }
 
  public function action_logout() {
    #Sign out the user
    Auth::instance()->logout();
    $this->request->redirect('/'); 
  }

  public function action_profile() {
    $this->request->redirect('/'); 
  }
}
?>