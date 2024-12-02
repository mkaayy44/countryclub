<?php
include ("inc\connect.php");
$Name=$_POST['firstname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$date=$_POST['date'];
$time=$_POST['time'];
$info=$_POST['subject'];
$playground=$_POST['playground'];
$query="INSERT INTO playgrounds (dbName,Email,Phone,dbDate,dbtime,info,playground)VALUES ('$Name','$email','$phone','$date','$time','$info','$playground')";
mysqli_query($con,$query) or die(mysqli_error($con));
header("location:playgrounds.html");
?>