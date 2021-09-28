<?php 

	$name = "alamin";
	$id = 12;
	$cgpa = 4.0;

/*	$student = array(1, 'alamin', 4.0);
	$student = [1, 'alamin', 4.0];
	$student[2];*/

	$student = ['id'=>1, 'name'=>'alamin', 'cgpa'=>4.0];
	$student['cgpa'];

	$students = [
			's1'=> ['id'=>1, 'name'=>'alamin', 'cgpa'=>3.5],
			's2'=> ['id'=>2, 'name'=>'alamin', 'cgpa'=>2.6],
			's3'=> ['id'=>3, 'name'=>'alamin', 'cgpa'=>4.3]
	];

	echo "<table border=1>
			<tr>
				<td>ID</td>
				<td>NAME</td>
				<td>CGPA</td>
			</tr>";

	foreach ($students as $std) {
		//echo "ID: ".$std['id']." Name: ".$std['name']. " Cgpa: ".$std['cgpa']."<br>";

		echo 	"<tr>
					<td>".$std['id']."</td>
					<td>{$std['name']}</td>
					<td>{$std['cgpa']}</td>
				</tr>";
	}

	echo "</table>"

	//echo $students['s2']['cgpa'];

	//print('hello PHP...');
	//echo "Hello......".$name;
	//print_r($student);


/*	function sum(){
		return 4+7;
	}
	echo sum();*/

	/*if(){

	}else{

	}

	switch (variable) {
		case 'value':
			// code...
			break;
		
		default:
			// code...
			break;
	}*/

/*	for ($i=0; $i <10 ; $i++) { 
		echo "Name: ".$name."\n";
	}*/

?>

