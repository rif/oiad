<?php echo form::open('user/register') ?>
  <table>
    <tr>
      <td><?php echo form::label('email','E-mail') ?></td>
      <td><?php echo form::input('email','',array('id' => 'email')) ?>
    </tr>
    <tr>
      <td><?php echo form::label('username','Username') ?></td>
      <td><?php echo form::input('username','',array('id' => 'username')) ?>
    </tr>
    <tr>
      <td><?php echo form::label('password','Password') ?></td>
      <td><?php echo form::password('password','',array('id' => 'password')) ?>
    </tr>
    <tr>
      <td><?php echo form::label('password_confirm','Password Confirm') ?></td>
      <td><?php echo form::password('password_confirm','',array('id' => 'password_confirm')) ?>
    </tr>
  </table>
  <div style="text-align:center">
    <?php echo form::submit('submit','Register') ?>
  </div>
<?php echo form::close() ?>