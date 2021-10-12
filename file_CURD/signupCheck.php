<?php 
	//session_start();

	if(isset($_POST['submit'])){

		$username 	= $_POST['username'];
		$email 		= $_POST['email'];
		$password 	= $_POST['password'];

		if($username != ""){
			if($password != ""){
				if($email !=""){

					/*$_SESSION['username'] = $username;
					$_SESSION['password'] = $password;
					$_SESSION['email'] = $email;*/

					/*setcookie('username', $username, time()+3600, '/');
					setcookie('password', $password, time()+3600, '/');
					setcookie('email', $email, time()+3600, '/');*/

					/*$myfile = fopen('user.txt', 'w');
					$myuser = $username."|".$password."|".$email;
					fwrite($myfile, $myuser);
					fclose($myfile);*/

					$myfile = fopen('user.txt', 'a');
					$myuser = $username."|".$password."|".$email."\r\n";
					fwrite($myfile, $myuser);
					fclose($myfile);

					header('location: login.html');
				}else{
					echo "invalid email....";
				}
			}else{
				echo "invalid password....";
			}
		}else{
			echo "invalid username....";
		}
	}
?>