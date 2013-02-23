
/*
		$(document).ready(function(){
			$("#logout").hide();
		});
*/

		var loggedIn = <?php echo logged_in() ?>;
		alert(loggedIn);
		if(loggedIn === 0){
			$(document).ready(function(){
				$("#logout").hide();
			});
		}
		else {
			$(document).ready(function(){
				$("#login").hide();
			});
		}

	/*
		$(function(){
			$("#logout").hide();
		});

		$(function(){
			$("#loginbutton").click(function(){
				$("#login").hide();
				$("#logout").show();
			});
		});

		$(function(){
			$("#logoutbutton").click(function(){
				$("#logout").hide();
				$("#login").show();
			});
		});
	*/