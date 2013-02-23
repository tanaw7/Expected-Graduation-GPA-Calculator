<?php include 'core/init.php' ?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Desired GPA Calculator</title>
	<link rel="stylesheet" href="css/wcs3.css">
	<script src="scripts/jquery-1.8.2.js"></script>

	<script type="text/javascript">
		var loggedIn = <?php echo logged_in() ?>;
		console.log(loggedIn);
		if(loggedIn === 1){
			$(document).ready(function(){
				$("#login").hide("slow");
			});
		}
		else {
			$(document).ready(function(){
				$("#logout").hide("slow");
			});
		}

	</script>

</head>

<body>
<section id="container" class="block1">
	<?php include 'includes/layouts/topbar.php' ?>
	<?php include 'includes/layouts/menu.php' ?>
	<?php include 'includes/layouts/content.php' ?>
	<?php include 'includes/layouts/foot.php' ?>
</section>
</body>
</html>