<?php 
	echo "this is custom modules";

	require_once('views/view.detail.php');
	require_once('mymod.php');
	$mymods = new myMod();

	// echo "$mymods->field_name_map[$field['name']]";
	// $names = $mymods->get_list_view_data();
	$temp = $mymods->getmymod();

	if(empty($temp)){
		echo "null";
	}
	else
	{
		echo "$temp";
	}
	
	// echo "<p>gettype($names)</p>";
 ?>