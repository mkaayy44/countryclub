<?php
include ("inc\connect.php");
$Name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];
$query="INSERT INTO contactus (dbName,Email,dbMessages)VALUES ('$Name','$email','$message')";
mysqli_query($con,$query) or die(mysqli_error($con));
header("location:contactus.html");
?>