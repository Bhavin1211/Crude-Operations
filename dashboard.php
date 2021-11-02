<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css" />
</head>

<style>
   body{
	   background-image:url('img/ddd.jpg');
	   background-repeat:no-repeat;
	   background-attachment:fixed;
	    background-size:100% 110%;
   }
   .button {
	 background-color: #4CAF50;
	 display: inline-block;
	 margin-top:5px;
	 margin-left:110px;
  border: none;
  color: white;
  padding: 10px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  border-radius: 12px;
}
	
   
  
   </style>
<body>
<?php session_start(); ?>

<div class="form">
        <p>Hey!</p>
        <h4 class="text-warning text-center">Welcome To The Dashboard. </h4> 
		
		<p class="link" ><a href="display.php">Client Details</a></p>
		<h3>Insert Client Details Cliek To Insert Button</h3>
		<a href="client.php" class="button" >Insert </a>
        <p><a href="logout.php"> Logout</a></p>
</div>




</body>
</html>
