<?php 

	//$name = $_GET['myname'];
	//$name = $_POST['myname'];
	$name = $_REQUEST['myname'];


	if($name != ""){
		echo $name;
	}else{
		echo "Null value...";
	}

?>