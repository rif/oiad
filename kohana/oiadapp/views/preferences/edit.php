<?php
echo $pref->cities;
echo strpos($pref->cities, 'Abilene, TX');
echo Form::open('/preferences');
?>
<select data-placeholder="Choose a city..." style="width: 380px" multiple="multiple" id="cities-select" name="cities[]" size="10">
<option value=""></option> 
<?php
$favCities = explode('|', $pref->cities);
foreach($cities as $c){	
	$sel = in_array($c, $favCities) || $pref->cities == $c;
	$selected = $sel ? 'selected="selected"' : '';		
    echo '<option value="'.$c.'" '.$selected.'>'.$c.'</option>';
}
?>
</select>

<?php
echo '<div>'.Form::submit('submit', 'Submit').'</div>';
echo Form::close();
?>

<script type="text/javascript">
	$(function(){
		$("#cities-select").chosen();
		$('form').submit(function(){
			$.post($(this).attr("action"), $(this).serialize(), function(data){
				$("#cities").text(data);
			});
			$.fancybox.close();
			return false;
		});
	});
</script>