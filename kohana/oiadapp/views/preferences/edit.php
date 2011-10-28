<select data-placeholder="Choose a city..." style="width: 450px" multiple="multiple" id="cities-select" name="cities[]" size="10">
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

<script type="text/javascript">
	$(function(){
		$("#cities-select").chosen().change(function(){
			var selected_cities = "";
			$("option:selected", this).each(function(){
				selected_cities += $(this).val() + "|";				
			});
			$.post("/preferences", {'cities': selected_cities});
		});
		
	});
</script>