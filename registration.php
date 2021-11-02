<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
    <link rel="stylesheet" href="style.css"/>
	
</head>

<style>
   body{
	   background-image:url('img/rrr.jpg');
	   background-repeat:no-repeat;
	   background-attachment:fixed;
	    background-size:100% 110%;
   }
   </style>

<body>
<?php

 
include 'db.php';

if (isset($_POST['done'])){

	$S_Name = $_POST['s_name'];
	$S_Email = $_POST['s_email'];
	$S_Password = $_POST['s_password'];
	$Confirm_password = $_POST['confirm_password'];

	$q = " INSERT INTO supervisor ( s_name, s_email, s_password, confirm_password) VALUES ('$S_Name','$S_Email','$S_Password','$Confirm_password')";
	$query = mysqli_query($con,$q);
	if ($query) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    }
		

    
?>
	<center>
        
    <form class="form" action="" method="post">
        <h1 class="login-title">Registration</h1>
        <input type="text" class="login-input" name="s_name" placeholder="SupervisorName" required />
        <input type="text" class="login-input" name="s_email" placeholder="Email Adress">
        <input type="password" class="login-input" name="s_password" placeholder="Password">
		<input type="password" class="login-input" name="confirm_password" placeholder="Confirm_password">
        <input type="submit" name="done"  class="login-button">
        <p class="link"><a href="login.php">Click to Login</a></p>
    </form>
<?php
    
?>
</body>
</html>