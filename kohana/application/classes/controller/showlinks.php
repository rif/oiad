<?php

defined('SYSPATH') OR die('No Direct Script Access');

Class Controller_Showlinks extends Controller_Template {

    public $template = 'show';

    public function action_index() {
        if (!empty($_POST)) {
            $model = ORM::factory('link'); // create
            $model->values($_POST); // load values to model
            // check() initializes $model->_validate with a Validation object containing the
            // rules, filters and callbacks from Model_User (e.g. $_rules, $_callbacks..)
            //if ($model->check()) {
            $model->save(); // save the model
            //} else {
            // Load errors. The first param is the path to the
            // message file (e.g. /messages/register.php)
            //		$this->template->errors = $model->validate()->errors('show');
            //}
        }

        $this->template->title = "OIAD";
        $links = ORM::factory('link');
        $this->template->links = $links->find_all();
    }

}
