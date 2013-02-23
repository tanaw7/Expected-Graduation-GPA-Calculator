<section id="topbar">
		<h1 id="logotext">MUIC DESIRED GPA CALCULATOR</h1>
		<section id="login" class="widget">
			<form action="login.php" method="post" style="overflow: hidden;">
					
				Username: <input type="text" name="username">
				Password: <input type="password" name="password">
				<input type="submit" value="Log in">
			</form>
		</section>

		<section id="logout" class="widget">
			<form action="logout.php" method="post">
				Logged in as: <?php echo $_SESSION['username']; ?> 
				User ID: <?php echo $_SESSION['user_id']; ?>
				<input type="submit" name="logout" value="Log out">
			</form>
		</section>



			<?php
			/*
			// if logged in show username, else show login form
			if (logged_in() === 1){
				include 'includes/widgets/logout_form.php';
			} else {
				include 'includes/widgets/login_form.php';
			}
			*/
			?>
</section>