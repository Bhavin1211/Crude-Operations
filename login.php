<html>
<head>
<meta charset="utf-8"/>
<TITLE>LOGIN PAGE</TITLE> 
<link rel="stylesheet" href="style.css"/>
</head>
<style>
   body{
	   background-image:url('img/LOGIN.jpg');
	   background-repeat:no-repeat;
	   background-attachment:fixed;
	    background-size:100% 110%;
   }
   </style>
<body>
	
            <center>
            <h3>Login your Account</h3>
	<form class="form" action="" method="post">
	
	<?php
 include 'db.php';
 if(isset($_POST['done'])){
	$S_Name=$_POST['s_name'];
	$S_Password=$_POST['s_password'];

	$sql = mysqli_query($con,"SELECT * FROM supervisor WHERE s_name='$S_Name' and s_password='$S_Password'");
	
	if(mysqli_num_rows($sql)>0){
		echo header('location:dashboard.php');				
		
	}else{
		echo "Incorrect Username or Password <br>";
		echo "Please Try Again <br>";
	}
 }
?>

        <h1 class="login-title">Login</h1>
        <input type="text" class="login-input" name="s_name" placeholder="SupervisorName" required />
        <input type="password" class="login-input" name="s_password" placeholder="Password">
        <input type="submit" name="done"  class="login-button">
        <p class="link"><a href="registration.php">Click To Registration</a></p>
    </form>
	
	
	
	
</body>
</html>