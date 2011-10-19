<!DOCTYPE html>
<html lang="en">
    <head>
    		<title>One Item A Day</title>        
    		<?php echo HTML::style('media/stylesheets/backend.css', array('media'=>'screen, projection')); ?>

    		<?php echo HTML::style('media/stylesheets/print.css', array('media'=>'print'));?>

    		<!--[if lt IE 8]><?php echo HTML::style('media/stylesheets/ie.css', array('media'=>'screen, projection')); ?><![endif]-->

    		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js"></script>

        <script>!window.jQuery && document.write('<script src="/media/js/jquery-1.6.4.min.js" type="text/javascript"><\/script>')</script>

    </head>
    <body>

    	<div id="container">
    	<div id="header">
    	 <h1>One Item A Day</h1>
    	</div>
       <div id="sidebar">
       <ul>                
        <li><?php echo HTML::anchor('/', 'Back to frontend'); ?></li>
        <li><?php echo HTML::anchor('/sites', 'Sites'); ?></li>        
        <li><?php echo HTML::anchor('/categories', 'Show All Categories'); ?></li>
        <li><?php echo HTML::anchor('/sites/scrapp_expired', 'Scrap Expired Sites'); ?></li>
       	<li><?php echo HTML::anchor('/sites/scrapp', 'Scrap All Sites'); ?></li>
       	<li><?php echo HTML::anchor('/deals', 'Show Today\'s Deals'); ?></li>
        <li><?php echo HTML::anchor('/admin_user', 'User Administration'); ?></li>
       </ul>
       </div>
       <div id="auth">
       <?php 
       $auth = Auth::instance();
       $user =ORM::factory('user', $auth->get_user());
       if($auth->logged_in()!= 0){
          echo 'Hello '.HTML::anchor('/user/profile', $user->username).'! '.HTML::anchor('/user/logout', 'Logout');
       } else {
          echo HTML::anchor('/user/login', 'Login').' or '.HTML::anchor('/user/register', 'Register');
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
