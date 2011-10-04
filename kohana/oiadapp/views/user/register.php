<? if ($message) : ?>
    <h3 class="message"><?= $message; ?></h3>
<? endif; ?>
<?php echo form::open('user/register') ?>
  <table>
    <tr>
      <td><?php echo form::label('email','E-mail') ?></td>
      <td><?php echo form::input('email','',array('id' => 'email')) ?>
      <div class="error">
      <?= Arr::get($errors, 'email'); ?>
      </div>
    </tr>
    <tr>
      <td><?php echo form::label('username','Username') ?></td>
      <td><?php echo form::input('username','',array('id' => 'username')) ?>
      <div class="error">
      <?= Arr::get($errors, 'username'); ?>
      </div>
    </tr>
    <tr>
      <td><?php echo form::label('password','Password') ?></td>
      <td><?php echo form::password('password','',array('id' => 'password')) ?>
      <div class="error">
      <?= Arr::get($errors, 'password'); ?>
      </div>
    </tr>
    <tr>
      <td><?php echo form::label('password_confirm','Password Confirm') ?></td>
      <td><?php echo form::password('password_confirm','',array('id' => 'password_confirm')) ?>
      <div class="error">
      <?= Arr::get($errors, 'password_confirm'); ?>
      </div>
    </tr>
  </table>
  <div style="text-align:center">
    <?php echo form::submit('submit','Register') ?>
  </div>
<?php echo form::close() ?>
<p>Or <?= HTML::anchor('user/login', 'login'); ?> if you have an account already.</p>
