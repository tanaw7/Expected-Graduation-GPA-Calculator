<?php 
function logout(){
	unset($_SESSION['user_id']);

	$_SESSION['username'] = '';
//	if (logged_in() === false){ 
//		echo "You've logged out!";
//		header('Location: http://localhost/index.php');
//	}
}

function logged_in(){
	return (isset($_SESSION['user_id'])) ? 1 : 0;
}

function user_exists($username) {
	$username = sanitize($username);
	$query = mysql_query("SELECT COUNT(`user_id`) FROM `users` WHERE `username` = '$username'"); //or die(mysql_error());
	return (mysql_result($query, 0) == 1) ? true : false;
}

function user_active($username) {
	$username = sanitize($username);
	$query = mysql_query("SELECT COUNT(`user_id`) FROM `users` WHERE `username` = '$username' AND `active` = 1"); //or die(mysql_error());
	return (mysql_result($query, 0) == 1) ? true : false;
}

function user_id_from_username($username){
	$username = sanitize($username);
	return mysql_result(mysql_query("SELECT user_id FROM users WHERE username = '$username'"), 0, 'user_id');
}

function login($username, $password){
	$user_id = user_id_from_username($username);

	$username = sanitize($username);
	$password = md5($password);
	$query = mysql_query("SELECT COUNT(user_id) FROM users WHERE username = '$username' AND password = '$password'");
	return (mysql_result($query, 0) == 1) ? $user_id : false;
}

function register_insert($username, $password, $first_name, $last_name, $email){
	$username = sanitize($username);
	$password = md5($password);
	$first_name = sanitize($first_name);
	$last_name = sanitize($last_name);
	$email = sanitize($email);

	$query = mysql_query("INSERT INTO users (username, password, first_name, last_name, email, active)
						  VALUES ('$username', '$password', '$first_name', '$last_name' , '$email', 1) ") or die(mysql_error());
	//return mysql_result($query, 0) == 1) ? true : false;
	return 0;
}

function profile_update($dgpa, $cgpa, $xgpa, $allcredits, $takencredits, $leftcredits){

	$user_id = $_SESSION['user_id'];
	$query = mysql_query("UPDATE users SET dgpa = $dgpa, cgpa = $cgpa, xgpa = $xgpa, allcredits = $allcredits,
						  takencredits = $takencredits, leftcredits = $leftcredits
						  WHERE user_id = $user_id");
	return 0;
}

function profile_select($user_id){
	$result = mysql_query("SELECT * FROM users WHERE user_id = '$user_id'");
	$row = mysql_fetch_array($result);

	$user_row = array($row['first_name'],$row['last_name'],$row['email'],$row['user_id'],$row['user_id']);
	echo $user_row;

  	echo $row['first_name'] . " " . $row['last_name'];
  	echo "<br />";

	return array($row['first_name'],$row['last_name'],$row['email'],$row['user_id'],$row['user_id']);
}
 ?>