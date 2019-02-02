<?php

if(isset($_POST['ajax_name'])) {
	$store = array("Matthew", "James", "Mike", "Daniel", "Glenn");
	foreach($store as $names){
		echo $names, "<br>";
	}
}

?>