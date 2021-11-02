<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

</head>
<body>
	<div class="col-lg-6 m-auto">

		<?php

		include 'db.php';

		$c_id = $_POST['C_Id'];
		$selectquery = "Select * from client where C_Id=$c_id";
		$sql = mysqli_query($con,$selectquery);
		$result = mysqli_fetch_assoc($sql);


		if (isset($_POST['done'])){
			$C_Id = $_POST['c_id'];
			$C_Name = $_POST['c_name'];
			$C_Email = $_POST['c_email'];
			$C_Address = $_POST['c_address'];
			$C_Mobile_No = $_POST['c_mobile_no'];
			$q = " update client set c_id=$C_Id,c_name='$C_Name',c_email='$C_Email',c_address='$C_Address',c_mobile_no='$C_Mobile_No' where c_id=$C_Id";
			$sql = mysqli_query($con,$q);
			//header('location:display.php');
		}
?>

      	<form  method="post">
      		<br><br><div class="card">
      		<div class="card-header bg-dark">
      			<h1 class="text-white text-center">Update</h1>
      		</div>

      		<label>C_Name:</label>
      		<input type="text" name="c_name" class="form-control"  required value=" <?php echo $result['c_name']; ?>"><br>

      		<label>C_Email:</label>
      		<input type="email" name="c_email" class="form-control" required value=" <?php echo $result['c_email']; ?> "><br>

      		<label>C_Address:</label>
      		<input type="text" name="c_address" class="form-control" required value=" <?php echo $result['c_address']; ?> "><br>

      		<label>C_Mobile_No:</label>
            <input type="number_format" name="c_mobile_no" class="form-control" required value=" <?php echo $result['c_mobile_no']; ?> "><br>

      		<button class="btn btn-success" type="submit" value="Update" name="done">Update</button><br>

      	</div>
      
      	</form>
      	
      	
      </div>





	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>

