<?php
echo Form::open('/preferences');
?>
<select data-placeholder="Choose a city..." style="width: 380px" multiple="multiple" id="cities-select" name="cities[]" size="10">
<option value=""></option> 
<?php
foreach($cities as $c){	
	$pos = strpos($pref->cities, $c) || $pref->cities == $c;
	$selected = ($pos === true) ? 'selected="selected"' : '';		
    echo '<option value="'.$c.'" '.$selected.'>'.$c.'</option>';
}
?>
</select>

<?php
echo '<span>'.Form::submit('submit', 'Submit').'</span>';
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