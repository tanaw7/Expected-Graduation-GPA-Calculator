<?php 
include 'core/init.php';


if(empty($_POST) === false){

	$dgpa = $_POST['first'];
	$cgpa = $_POST['second'];
	$xgpa = $_POST['third'];
	$allcredits = $_POST['fourth'];
	$takencredits = $_POST['fifth'];
	$leftcredits = $_POST['sixth'];

	if (empty($cgpa) === true || empty($allcredits) === true || empty($dgpa) || empty($takencredits) === true) {
		$errors[] = 'You have not inserted all values.';}
	else {
			//CHECKBY die($login);
			profile_update($dgpa, $cgpa, $xgpa, $allcredits, $takencredits, $leftcredits);
			//register_insert($username, $password, $first_name, $last_name, $email);
			//echo '<script type="text/javascript">alert("You have registered, please log in!")</script>';
			//echo 'Please login on the top bar.';
			exit();

			// set the user session
			// redirect user to home
	
	}

	print_r($errors);
}
 ?>