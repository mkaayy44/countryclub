<?php
include ("inc\connect.php");
$Name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$date=$_POST['date'];
$time=$_POST['time'];
$info=$_POST['info'];
$query="INSERT INTO swimclass (dbName,Email,dbPhone,dbDate,dbTime	,Moreinfo)VALUES ('$Name','$email','$phone','$date','$time','$info')";
mysqli_query($con,$query) or die(mysqli_error($con));
header("location:swimming.html");
?>