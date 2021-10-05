<?php 

	if(isset($_POST['submit'])){

		$username 	= $_POST['username'];
		$password 	= $_POST['password'];

		if($username != ""){
			if($password != ""){
				
				if($username == $password){
					//flag
					header('location: home.html');
				}else{
					echo "invalid username/password";
				}	

			}else{
				echo "invalid password....";
			}
		}else{
			echo "invalid username....";
		}
	}
?>