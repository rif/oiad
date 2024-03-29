<?php
/**
 *
 * @author Mikito Takada
 * @package default
 */
?>
<div class="block">
<div class="submenu">
   <ul>
      <li><?php echo Html::anchor('admin_user/edit', __('Add new user'))?></li>
   </ul>
   <div class="search" style="float: right; padding: 5px; margin-right: 20px;height: 25px;"> 
   	<?php
   	echo Form::open('/admin_user/', array('method' => 'get', 'id' => 'searchform')); //, 'onsubmit' => 'return false;'
	echo "<span style='padding-right: 10px;'>".Form::label('search', 'Search text:')."</span>";
	echo "<span style='padding-right: 10px;'>".Form::input('search')."</span>";
	echo "<span>".Form::submit('search_btn', 'Search', array('id' => 'search_btn'))."</span>";
	echo Form::close();
	?>
   </div>
   <br style="clear:both;">
</div>
<h1><?php echo __('Administer users'); ?></h1>
<div class="content">
<?php
echo $paging->render();
// format data for DataTable
$data = array();
$merge = null;
$providers = array_filter(Kohana::$config->load('useradmin.providers'));
foreach ($users as $user) {
   $row = $user->as_array();
   // reformat dates
   $row['created'] = Helper_Format::friendly_datetime($row['created']);
   $row['modified'] = Helper_Format::friendly_datetime($row['modified']);
   $row['last_login'] = Helper_Format::relative_time($row['last_login']);
//   $row['last_failed_login'] = Helper_Format::relative_time(strtotime($row['last_failed_login']));
   // add actions
   $row['actions'] = Html::anchor('admin_user/edit/'.$row['id'], __('Edit')).' | '.Html::anchor('admin_user/delete/'.$row['id'], __('Delete'));
   // set roles
   $row['role'] = '';
   foreach($user->roles->where('name', '!=', 'login')->find_all() as $role) {
      $row['role'] .= $role->name.', ';
   }
   // remove last comma
   $row['role'] = substr($row['role'], 0, -2);
   // add provider icons
   if(!empty($providers)) {
      $row['identities'] = '';
      $identities = $user->user_identity->find_all();
      if($identities->count() > 0) {
         foreach($identities as $identity) {
            $row['identities'] .= '<img src="/img/tiny/'.$identity->provider.'.png"> ';
         }
      }
   }
   $data[] = $row;
}

$column_list = array( 'username' => array( 'label' => __('Username') ),
                       'role' => array( 'label' => __('Role(s)'), 'sortable' => false ),
                       'last_login' => array( 'label' => __('Last login') ),
                       'logins' => array( 'label' => __('# of logins') ),
                     );
if(!empty($providers)) {
   $column_list['identities'] = array( 'label' => __('Identities'), 'sortable' => false );
}
$column_list['actions'] = array( 'label' => __('Actions'), 'sortable' => false );
$datatable = new Helper_Datatable($column_list, array('paginator' => true, 'class' => 'table', 'sortable' => 'true', 'default_sort' => 'username'));
$datatable->values($data);
echo $datatable->render();
echo $paging->render();
?>
</div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
    	$("#search_btn").click(function(){
    		var q=$("#searchform input[name=search]").val();
    		if(q == '')
    		{
    			window.location.href=$("#searchform").attr('action');
    		}
    		else if(q.indexOf("%")>=0 || q.indexOf("_")>=0)
    		{
    			alert("The characters % and _ are not allowed in the search text box!");
    		}
    		else
    		{
    			window.location.href=$("#searchform").attr('action') + "?q="+ q;
    		}    		
    	});
    	
        $("#searchform").submit(function() {
            return false;
        });
     });
</script>
