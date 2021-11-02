<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>


	<div class="container">
	<div class="col-lg-12">
	<br><br>
	<h1 class="text-warning text-center">Client Details</h1>
	<br>
	<p><a href="dashboard.php"> Back To Dashboard </a></p>
	<table class="table table-scriped table-hover table-bordered">

		<tr>
			<th>C_Id</th>
			<th>C_Name</th>
			<th>C_Email</th>
			<th>C_Address</th>
			<th>C_Mobile_No</th>
			<th>Update</th>
            <th>Delete</th>			
		</tr>

		<?php

		include 'db.php';
		$q = " select * from client";

		$query = mysqli_query($con,$q);
		$i= 0;	
		while($res = mysqli_fetch_array($query)){



        ?>
        <tr>
			<td><?php echo $i+1; ?></td>
			<td><?php echo $res['C_Name']; ?></td>
			<td><?php echo $res['C_Email']; ?></td>
			<td><?php echo $res['C_Address']; ?></td>
			<td><?php echo $res['C_Mobile_No']; ?></td>
			<td><button class="btn-primary btn"> <a href="update.php?id=<?php echo $res['C_Id']; ?>" class="text-white"> Update </a></button></td>	
			<td><button class="btn-danger btn"> <a href="delete.php?id=<?php echo $res['C_Id']; ?>" class="text-white"> Delete </a></button></td>
		</tr>
		<?php
		$i++;
	    }
		?>
			
	</table>	
			
	</div>	
		
	</div>







	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>




