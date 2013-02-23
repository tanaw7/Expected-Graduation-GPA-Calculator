<?php 
include 'core/init.php';


if(empty($_POST) === false){
	$username = $_POST['username'];
	$password = $_POST['password'];
	$cpassword = $_POST['cpassword'];
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$email = $_POST['email'];

	if (empty($username) === true || empty($password) === true || empty($cpassword) || empty($email) === true) {
		$errors[] = 'You need to enter a username, a password, and an email to register.';
	} else if (user_exists($username) === true) {
		$errors[] = "That username already exists";
	}
	else {
			//CHECKBY die($login);
			register_insert($username, $password, $first_name, $last_name, $email);
			echo '<script type="text/javascript">alert("You have registered, please log in!")</script>';
			echo 'Please login on the top bar.';
			exit();

			// set the user session
			// redirect user to home
	
	}

	print_r($errors);
}
 ?>