
<div class="block">
   <div class="submenu">
      <ul>
         <li><?php echo Html::anchor('user/profile_edit', __('Edit profile')); ?></li>
         <li><?php echo Html::anchor('user/unregister', __('Delete account')); ?></li>
      </ul>
      <br style="clear:both;">
   </div>
   <h1><?php echo __('User profile') ?></h1>
   <div class="content">
      <p class="intro">This is your user information, <?php echo $user->username ?>.</p>

      <h2>Username &amp; Email Address</h2>
      <p><?php echo $user->username ?> &mdash; <?php echo $user->email ?></p>

      <h2>Login Activity</h2>
      <p>Last login was <?php echo date('F jS, Y', $user->last_login) ?>, at <?php echo date('h:i:s a', $user->last_login) ?>.<br/>Total logins: <?php echo $user->logins ?></p>

      <?php
      $providers = array_filter(Kohana::$config->load('useradmin.providers'));
      $identities = $user->user_identity->find_all();
      if($identities->count() > 0) {
         echo '<h2>Accounts associated with your user profile</h2><p>';
         foreach($identities as $identity) {
            echo '<a class="associated_account" style="background: #FFF url(/img/small/'.$identity->provider.'.png) no-repeat center center"></a>';
            unset($providers[$identity->provider]);
         }
         echo '<br style="clear: both;"></p>';
      }
      if(!empty($providers)) {
         echo '<h2>Additional account providers</h2><p>Click the provider icon to associate it with your existing account.</p><p>';
         foreach($providers as $provider => $enabled) {
            echo '<a class="associated_account '.$provider.'" href="'.URL::site('/user/associate/'.$provider).'"></a>';
         }
         echo '<br style="clear: both;"></p>';
      }
      ?>
      <h2>Prefered cities</h2>
      <span id="cities">
      <?php
         $pref = ORM::factory('preference')->where('user','=',$user->id)->find();
         echo str_replace('|',', ',$pref->cities);
      ?>
      </span>
      <?php echo Html::anchor('preferences', __('Edit'), array("id"=>"edit-cities")); ?>
   </div>
</div>
<div id="dialog-form" title="Prefered cities"></div>
<script type="text/javascript">
   $(function(){
      $( "#dialog-form" ).dialog({
			autoOpen: false,
			height: 300,
			width: 400,
			modal: true,
			buttons: {
				"Submit": function() {
					$('#dialog-form>form').submit();
					console.log($(this));
					console.log($( "#dialog-form" ));					
					$( this ).dialog( "close" );
				},
				Cancel: function() {
					$( this ).dialog( "close" );
				}
			},
			close: function() {
				$("#dialog-form").html("");				
			}
		});

		$( "#edit-cities" ).click(function() {
			$("#dialog-form").load($(this).attr("href"), function(){
				$("#dialog-form").dialog( "open" );
			});
			return false;
	   });
   });
</script>
