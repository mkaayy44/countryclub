<?php
include ("inc\connect.php");
$email=$_POST['email'];
$password=$_POST['password'];
$query="INSERT INTO members (Email,dbpassword)VALUES ('$email','$password')";
mysqli_query($con,$query) or die(mysqli_error($con));
header("location:index1.html");
?>