<?php include 'core/init.php' ?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>webFrame!</title>
	<link rel="stylesheet" href="css/frameCSS.css">
	<script src="scripts/jquery-1.8.2.js"></script>
	<script src="scripts/calculator.js"></script>
</head>
<body>

	<section style="width:70%;margin-left:auto;margin-right:auto;" class="content">
		<form name="variables" action="" method="get">
			<caption>Enter the following values: </caption><br/><br/>
			<table border="1">
				<tr>
					<td><input type="text" name="vari1" value=""/></td>
					<td>Current GPA</td>
				</tr>
				<tr>
					<td><input type="text" name="vari2" value=""/></td>
					<td>Desired GPA (Final GPA you want when graduating)</td>
				</tr>
				<tr>
					<td><input type="text" name="vari3" value=""/></td>
					<td>All Total Credits (184, 186)</td>
				</tr>
				<tr>
					<td><input type="text" name="vari4" value=""/></td>
					<td>Credits Earned</td>
				</tr>
			</table>
			<br/>

			<input type="button" name="butt1" value="Submit" onClick="calculate(this.form)"/>

		</form>

		<p id="resulthere"><code>Result: </code></p>
	</section>

</body>
</html>