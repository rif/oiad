<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml" dir="ltr" lang="en-US">
<head>
   <title><?php echo $title ?></title>
   <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
   <?php echo HTML::style('media/stylesheets/screen.css', array('media'=>'screen, projection')); ?>

        <?php echo HTML::style('media/stylesheets/print.css', array('media'=>'print'));?>

        <!--[if lt IE 8]><?php echo HTML::style('media/stylesheets/ie.cs', array('media'=>'screen, projection')); ?><![endif]-->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js"></script>
</head>
<body>
   <div id="page">
      <div id="header"></div>
      <div id="navigation">
         <ul class="menu">

             <?php
             $session = Session::instance();

             if (Auth::instance()->logged_in()){
                echo '<li>'.Html::anchor('admin_user', 'User admin').'</li>';
                echo '<li>'.Html::anchor('user/profile', 'My profile').'</li>';
                echo '<li>'.Html::anchor('user/logout', 'Log out').'</li>';
             } else {
                echo '<li>'.Html::anchor('user/register', 'Register').'</li>';
                echo '<li>'.Html::anchor('user/login', 'Log in').'</li>';
             }
           ?>
         </ul>
      </div>
   <div id="content">
    <?php
    // output messages
     echo Message::output();
     echo $content ?>
   </div>
</div>
   
<?=$profile?>
</body>
</html>
