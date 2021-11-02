<?php

include "db.php";
$res = $_POST['c_id']; 
$del = mysqli_query($con,"delete from client where c_id = '$res'"); 
if($del)
{
    mysqli_close($con); 
    //header("location:display.php");
    exit;	
}
else
{
    echo "Error deleting record";}
?>

