<?php 
	session_start();

	if(isset($_POST['submit'])){

		$username 	= $_POST['username'];
		$password 	= $_POST['password'];

		if($username != ""){
			if($password != ""){
				
				if($username == $_SESSION['username'] && $password == $_SESSION['password']){
					$_SESSION['flag'] = 'true';
					header('location: home.php');
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