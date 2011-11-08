<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_User extends Useradmin_Model_User {
	protected $_has_many = array(
// auth
	'roles' => array('through' => 'roles_users'),
	'user_tokens' => array(),
	// for facebook / twitter / google / yahoo identities
	'user_identity' => array(),
    'sites' => array(
        'model'   => 'site',
        'through' => 'user_sites',
    ),
);
}