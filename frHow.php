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
	<section style="width:70%;margin-left:auto;margin-right:auto;" class="content">
<p>
A Simple Formula to calculate the grades you need for the desired GPA in MUIC:
</p>
<ul>
<li>C = Current GPA</li>
<li>D = Desired GPA (What final GPA you want when graduating)</li>
<li>A = All Total credits (i.e. Computer Science 186, Business major 184)</li>
<li>T = Credits already taken</li>
<li>L = Credits left to take</li>
<li>X = Average Steady Term GPA you need to get from now on</li>
</ul>
<p>
Formula: X = [(D*A) - (C*T)] / L
</p>

<p>Example:</p>
<p>
A student in a business major has the total of 184 credits, 
she has taken 93 credits already. Her current GPA is 2.8. 
She wants her GPA when graduating to be 3.0. We calculate for X.
</p>
<p>
C = 2.8,
D = 3.0,</br>
A = 184,
T = 93,</br>
L = 184-93 = 91</br>
X = What you need to get At LEAST from now on.
</p>
<p>
X = [(D*A) - (C*T)] / L<br />
X = [(3.0*184) - (2.8*93)] / 91<br />
X = 3.0244
</p>
<p>
Meaning from now on, she has 91 credits left, she has to get in every 
semester at least the term GPA of 3.0244, in order to get the accumulative 
GPA of 3.0 when she graduates. 
</p>
	</section>
</body>
</html>