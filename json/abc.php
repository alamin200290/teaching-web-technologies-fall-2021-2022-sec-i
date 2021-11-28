<?php 

	//echo $_REQUEST['data'];
	$data = json_decode($_REQUEST['data']);
	//print_r($data);

	$mydata = ['name'=> 'alamin', 'age'=>12, 'dept'=>'SE'];
	echo json_encode($mydata);
?>