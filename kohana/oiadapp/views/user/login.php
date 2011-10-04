<? if ($message) : ?>
    <h3 class="message"><?= $message; ?></h3>
<? endif; ?>
<?php
echo Form::open('/user/login');
?>

<ul>
   <li><label><?php echo __('Username'); ?></label><?php echo Form::input('username', null); ?></li>
   <li><label><?php echo __('Password'); ?></label><?php echo Form::password('password', null) ?></li>
   <li><?= Form::label('remember', 'Remember Me'); ?><?= Form::checkbox('remember'); ?>
        <p>(Remember Me keeps you logged in for 2 weeks)</p>
   </li>
   <li><?php echo Form::submit(NULL, __('Login')); ?></li>
</ul>
<br style="clear:both;"/>
<?php
echo Form::close();
?>