<?php 
include 'core/init.php';
 ?>

<?php
$user_id = $_SESSION['user_id'];
$result = mysql_query("SELECT * FROM users WHERE user_id = '$user_id'");
$row = mysql_fetch_array($result);
?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="css/frameCSS.css">
	<script src="scripts/jquery-1.8.2.js"></script>

	<script type="text/javascript">
/*
		var user_id     = "<?php echo $row[0]; ?>";
		var username    = "<?php echo $row[1]; ?>";
		var first_name  = "<?php echo $row[3]; ?>";
		var last_name   = "<?php echo $row[4]; ?>";
		var email       = "<?php echo $row[5]; ?>";
		var dgpa        = "<?php echo $row[7]; ?>";
		var cgpa        = "<?php echo $row[8]; ?>";
		var xgpa        = "<?php echo $row[9]; ?>";
		var allcredits  = "<?php echo $row[10]; ?>";
		var takencredits = "<?php echo $row[11]; ?>";
		var leftcredits = "<?php echo $row[12]; ?>";

		var uinfo = [user_id, username, first_name, last_name, dgpa, cgpa, xgpa, allcredits, takencredits, leftcredits];

		for(var i = 0; i<10; i++){
		console.log(uinfo[i]);
		}

		document.getElementById("td1").innerHTML="user_id";
		document.getElementById("td2").innerHTML=uinfo[0];
		document.getElementById("td3").innerHTML=uinfo[2];
		document.getElementById("td4").innerHTML=uinfo[3];
		document.getElementById("td5").innerHTML=uinfo[5];
		document.getElementById("td6").innerHTML=uinfo[4];
		document.getElementById("td7").innerHTML=uinfo[7];
		document.getElementById("td8").innerHTML=uinfo[8];
		document.getElementById("td9").innerHTML=uinfo[9];
		document.getElementById("td10").innerHTML=uinfo[6];
*/
	</script>

</head>
<body>
	<section style="width:70%;margin-left:auto;margin-right:auto;" class="content">
		<table id="profiletb">
			<tr>
				<td>USERNAME: </td>
				<td><div id="td1"></div></td>
			</tr>
			<tr>
				<td>USER ID : </td>
				<td> <div id="td2"></div></td>
			</tr>
			<tr>
				<td>First Name: </td>
				<td> <div id="td3"></div></td>
			</tr>
			<tr>
				<td>Last Name: </td>
				<td> <div id="td4"></div></td>
			</tr>
			<tr>
				<td>Current GPA: </td>
				<td> <div id="td5"></div></td>
			</tr>
			<tr>
				<td>Desired GPA: </td>
				<td> <div id="td6"></div></td>
			</tr>
			<tr>
				<td>Total required Credits: </td>
				<td> <div id="td7"></div></td>
			</tr>
			<tr>
				<td>Credits Earned: </td>
				<td> <div id="td8"></div></td>
			</tr>
			<tr>
				<td>Credits Left: </td>
				<td> <div id="td9"></div></td>
			</tr>
			<tr>
				<td>Average Steady GPA: </td>
				<td><div id="td10"></div></td>
			</tr>
		</table>

	</section>
	<script type="text/javascript">
		var user_id     = "<?php echo $row[0]; ?>";
		var username    = "<?php echo $row[1]; ?>";
		var first_name  = "<?php echo $row[3]; ?>";
		var last_name   = "<?php echo $row[4]; ?>";
		var email       = "<?php echo $row[5]; ?>";
		var dgpa        = "<?php echo $row[7]; ?>";
		var cgpa        = "<?php echo $row[8]; ?>";
		var xgpa        = "<?php echo $row[9]; ?>";
		var allcredits  = "<?php echo $row[10]; ?>";
		var takencredits = "<?php echo $row[11]; ?>";
		var leftcredits = "<?php echo $row[12]; ?>";

		var uinfo = [user_id, username, first_name, last_name, dgpa, cgpa, xgpa, allcredits, takencredits, leftcredits];

		for(var i = 0; i<10; i++){
		console.log(uinfo[i]);
		}

		document.getElementById("td1").innerHTML=uinfo[1];
		document.getElementById("td2").innerHTML=uinfo[0];
		document.getElementById("td3").innerHTML=uinfo[2];
		document.getElementById("td4").innerHTML=uinfo[3];
		document.getElementById("td5").innerHTML=uinfo[5];
		document.getElementById("td6").innerHTML=uinfo[4];
		document.getElementById("td7").innerHTML=uinfo[7];
		document.getElementById("td8").innerHTML=uinfo[8];
		document.getElementById("td9").innerHTML=uinfo[9];
		document.getElementById("td10").innerHTML=uinfo[6];

	</script>
</body>
</html>