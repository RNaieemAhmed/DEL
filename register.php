<?php include('server.php');
error_reporting(0);

?>


<html>
	<head>
		<link rel="stylesheet" href="css/style.css">
	</head>
	
	<body class="boddy">
	<div class="container reg_container" id="container">
		<div class="form-container sign-up-container">
			<form action="register.php" method="post" class="pure-form">
			<?php include('error.php') ?>
				<h1 class="reg_head">Sign up</h1>
				<input class="reg_input" type="message" value="<?php echo $name; ?>" name="name" placeholder="Enter name" id="name" required>
				<input class="reg_input" type="message" value="<?php echo $username; ?>" name="username" placeholder="Enter User ID" id="signup_user_id"  required>
				<input class="reg_input" type="message" value="<?php echo $password_1; ?>" name="password_1" placeholder="Enter Password" id="password" required>
				<input class="reg_input" type="message" value="<?php echo $password_2; ?>" name="password_2" placeholder="Enter Confirm Password" id="confirm_password" required>		
				<button type="submit" name="reg_user" class="reg_button pure-button pure-button-primary" onclick="validatePassword()">Register</button>
		
		</form>	
		</div>
		<div class="form-container sign-in-container">
			<form action="register.php" method="post">

			<?php include('error.php') ?>

				<h1 class="reg_head">Sign in</h1>				
				<input class="reg_input" name="username" type="message" placeholder="Enter User ID" id="account_id" required>
				<input class="reg_input" name="password_1" type="password" placeholder="Password"  required>
				<a class="reg_a" href="forgot.php">Forgot your password?</a>
				<button name="login_user" class="reg_button" id="valid_account" onclick="confirm_account()">Sign In</button>
			</form>
		</div>
		<div class="overlayy-container">
			<div class="overlayy">
				<div class="overlayy-panel overlayy-left">
					<img src="img/del.png" width="200px">
					<h1 class="reg_head">Hi DEL Member </h1>
					<p class="reg_p">please fill your details to login with us</p>
					<button class="ghost reg_button" id="signIn">Sign In</button>
				</div>
				<div class="overlayy-panel overlayy-right">
					<img src="img/del.png" width="200px">
					<h1 class="reg_head">Hello Guys!!</h1>
					<p class="reg_p">Sign-Up to access our library</p>
					<button class="ghost reg_button" id="signUp" >Sign Up</button>
				</div>
			</div>
		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"crossorigin="anonymous"></script>
	
	<script>
		
		const signUpButton = document.getElementById('signUp');
	const signInButton = document.getElementById('signIn');
	const container = document.getElementById('container');
	
	signUpButton.addEventListener('click', () => {
		container.classList.add("right-panel-active");
	});
	
	signInButton.addEventListener('click', () => {
		container.classList.remove("right-panel-active");
	});
	
	var password = document.getElementById("password");
	var confirm_password = document.getElementById("confirm_password");
		  
		  function validatePassword(){		
			
			if(password.value != confirm_password.value)
			 {
			  confirm_password.setCustomValidity("Passwords Don't Match");
			}
			else {
				confirm_password.setCustomValidity('');
			}			
		  }

		  
	</script>
	</body>
	</html>		
