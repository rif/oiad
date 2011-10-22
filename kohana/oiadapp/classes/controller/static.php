<?php defined('SYSPATH') OR die('No Direct Script Access');

class Controller_Static extends Controller_Template {

    public $template = 'base';

    public function action_about() {
        $view = View::factory('static/about');       
        $this->template->content = $view;
    }
    
    public function action_faq() {
        $view = View::factory('static/faq');       
        $this->template->content = $view;
    }
    
    public function action_link() {
        $view = View::factory('static/link');       
        $this->template->content = $view;
    }
    
    public function action_privacy() {
        $view = View::factory('static/privacy');       
        $this->template->content = $view;
    }
    
    public function action_terms() {
        $view = View::factory('static/terms');       
        $this->template->content = $view;
    }
    
    public function action_info() {
        $view = View::factory('static/info');       
        $this->template->content = $view;
    }
    
    public function action_contact() {
        $view = View::factory('static/contact');       
        $this->template->content = $view;
    }
}
?>

