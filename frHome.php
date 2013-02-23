<?php include 'core/init.php' ?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="css/frameCSS.css">
	<script src="scripts/jquery-1.8.2.js"></script>
</head>
<body>
<section class="content">

<h1>
<?php
	echo 'Welcome!';
	echo ' ' . $_SESSION['username'];
?>
<h1>

<h2>Introduction:</h2>
<p>
Students often wonder if they can graduate with 3.00 average GPA, and how well they would have to do each term from now or whether they would be able to make it at all.
</p>
<p>
Desired GPA Calculator is an application website where users may enter some required 
information and get back the average steady GPA that is needed in order to achieve a desired GPA.
This project is designed originally for MUIC students, however with an improved formula 
it can now calculate the result for any student in general colleges and universities very accurately. 
This project is implemented mainly on HTML5, DOM, CSS, JavaScript, AJAX, JQuery, PHP, Apache2, MySQL, 
Ubuntu Server 12.04.
</p>

<p>Formula to calculate the grades you need for the desired GPA in MUIC:</p>

<ul>
	<li>Current GPA</li>
	<li>Desired GPA (What final GPA you want when graduating)</li>
	<li>All Credits (i.e. Computer Science 186, Business major 184)</li>
	<li>Credits already earned</li>
	<li>Credits left to take</li>
	<li>Average Steady Term GPA you need to get from now on</li>
</ul>

<p>Please see the "How it works" Section for more detials.</p>

<p>
Features:</p>
<p>
Students are not required to register. But if you choose to do so, you can 
to store and update your results of the calculations.</p>

<p>
Notes: This is not the same one as in OASIS system where it just calculates how much a student's GPA would be, given that the grades on the subjects that student had taken are changed.</p>
</section>


</body>
</html>