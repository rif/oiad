<?php
	echo 'Your ip: '.$your_ip;
	echo '<br/>';
	if($record){
		echo 'Location: '.$record->country_code.' '.$record->city;
	}
?>