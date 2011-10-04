<!DOCTYPE html>
<html lang="en">
    <head>
    		<title>One Item A Day</title>
    		<?php echo HTML::style('media/stylesheets/screen.css', array('media'=>'screen, projection')); ?>

    		<?php echo HTML::style('media/stylesheets/print.css', array('media'=>'print'));?>

    		<!--[if lt IE 8]><?php echo HTML::style('media/stylesheets/ie.cs', array('media'=>'screen, projection')); ?><![endif]-->
    		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js"></script>
    </head>
    <body>

    	<div id="container">
       <div id="sidebar">
        <a href="/"><img src="/media/images/logo.png" alt="logo"/></a>
       <ul>
        <li><?php echo HTML::anchor('/', __('Home')); ?></li>
        <li><?php echo HTML::anchor('/oiad/deals', __('Daily Deals')); ?></li>
        <li><?php echo HTML::anchor('/sites', __('Administration')); ?></li>
       </ul>
       Commercials
       </div>
       <div id="auth">
       <?php 
       $session = Session::instance();
       $auth = Auth::instance();
       $user =ORM::factory('user', $auth->get_user());
       if($auth->logged_in()!= 0){
          echo 'Hello '.HTML::anchor('/user/profile', $user->username).'! '.HTML::anchor('/user/logout', __('Logout'));
       } else {
          echo HTML::anchor('/user/login', 'Login').' or '.HTML::anchor('/user/register', __('Register'));
       }
       ?>
      </div> <!-- auth -->
      <div id="content">
   		<?php echo $content; ?>
        </div> <!-- content -->
         <div id="footer"></div>
        </div> <!-- container -->
    </body>
</html>
