<?php
echo Form::open('/user/register');
?>

<ul>
   <li><label><?php echo __('Username'); ?></label></li>
   <?php echo Form::input('username', null, array('info' => __('Length between 1-32 characters. Letters, numbers, dot and underscore are allowed characters.'))); ?>
   <li><label><?php echo __('Email address'); ?></label></li>
   <?php echo Form::input('email') ?>
   <li><label><?php echo __('Password'); ?></label></li>
   <?php echo Form::password('password', null, array('info' => __('Password should be between 6-42 characters.'))) ?>
   <li><label><?php echo __('Re-type Password'); ?></label></li>
   <?php echo Form::password('password_confirm') ?>
   <?php if(isset($captcha_enabled) && $captcha_enabled) { ?>

   <?php } ?>
   <li><?php echo Form::submit(NULL, __('Register new account')); ?></li>
</ul>
<br style="clear:both;">
<?php
echo Form::close();
?>