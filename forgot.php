<?php
error_reporting(0);
session_start();
$_SESSION["username"] =  $_POST["username"];
$conn = mysqli_connect("localhost", "root", "", "del") or die("Connection Error: " . mysqli_error($conn));

if (count($_POST) > 0) {
    $result = mysqli_query($conn, "SELECT *from delusers WHERE username='" . $_SESSION["username"] . "'");
    $row = mysqli_fetch_array($result);
    if ($_POST["username"] == $row["username"]) {
        mysqli_query($conn, "UPDATE delusers set password_1='" . $_POST["newPassword"] . "' WHERE username='" . $_SESSION["username"] . "'");
        
        header('location: register.php');
        
    } else
    echo "<script> alert('usernase does not exist')</script>";
}


?>
<html>
    <head>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <style>
    
    
    </style>
    <body class="boddy">
    <div class="container reg_container" id="container">
        <div class="form-container sign-in-container">
            <form action="" method="post">
                <h1 class="reg_head">Recovery</h1>
                <input class="reg_input" type="message" placeholder=" Enter your Username" name="username" required>
                <input class="reg_input" type="message" placeholder=" Enter your New password" name="newPassword" id="newpassword" required>
                <input class="reg_input" type="message" placeholder=" Confirm your New password" name="confirmPassword" id="confirmpassword" required>
                <button class="reg_button"  onclick="validatePassword()">Submit</button>
            </form>
        </div>
        <div class="overlayy-container">
            <div class="overlayy">
                <div class="overlayy-panel overlayy-left">
                </div>
                <div class="overlayy-panel overlayy-right">
                    <img src="img/del.png" width="200px">
                    <h1 class="reg_head">Hello Guys!!</h1>
                    <p class="reg_p">Digital Engineering Library</p>
                </div>
            </div>
        </div>
    </div>

<script>
    var password = document.getElementById("newpassword");
	var confirm_password = document.getElementById("confirmpassword");
		  
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