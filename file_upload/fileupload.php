<?php 

	//print_r($_FILES['myfile']);
	$des = "upload/".$_FILES["myfile"]["name"];

	//echo $_FILES["myfile"]["tmp_name"];
	//echo $des;
	$src = $_FILES["myfile"]["tmp_name"];

	if(move_uploaded_file($src, $des)){
		echo "Done";
	}else{
		echo "Error";
	}
?>