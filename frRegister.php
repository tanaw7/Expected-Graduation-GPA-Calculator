<?php 
include 'core/init.php';
 ?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="css/frameCSS.css">
	<script src="scripts/jquery-1.8.2.js"></script>
	<!--<script src="scripts/focusHighlight.js"></script>-->

	<script type="text/javascript">

	var loggedIn = <?php echo logged_in(); ?>;

	if(loggedIn === 1){
		$(document).ready(function(){
			$("#registration").hide();
		});
	} else{
		$(document).ready(function(){
			$("#message").hide();
		});
	}



	</script>
</head>
<body>
	<section class="content">
			<section id="message">
				<p>
					You already have an account and logged in!
				</p>
			</section>
			<section id="registration">
				<h2>Registration: </h2>
				<section>
					<form class="forms" action="register_process.php" method="post">
						<table id="register" style="list-style:none">
							<tr>
								<td>Username:</td>
								<td><input type="text" id="username" name="username"></td>
								<td><div></div></td>
							</tr>
							<tr>
								<td>Password:</td>
								<td><input type="password" id="password" name="password"></td>
								<td><div></div></td>
							</tr>
							<tr>
								<td>Confirm Password:</td>
								<td><input type="password" id="cpassword" name="cpassword"></td>
								<td><div></div></td>
							</tr>
							<tr>
								<td>First Name:</td>
								<td><input type="text" id="first_name" name="first_name"></td>
								<td><div></div></td>
							</tr>
							<tr>
								<td>Last Name:</td>
								<td><input type="text" id="last_name" name="last_name"></td>
								<td><div></div></td>
							</tr>
							<tr>
								<td>Email:</td>
								<td><input type="text" id="email" name="email"></td>
								<td><div></div></td>
							</tr>
							<tr>
								<td><input type="submit" id="register_button" value="Register!">
							</tr>
						</table>
					</form>
				</section>
			</section>
	</section>
<?php
/*
$logged = logged_in();
if (logged_in()===0){
	include 'includes/widgets/register_form.php';
} else {
	echo "You already have an account!!!";
}
*/
 ?>

</body>
</html>