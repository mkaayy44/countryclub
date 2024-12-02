<?php
include ("inc\connect.php");
$Name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$date=$_POST['date'];
$guest=$_POST['num'];
$info=$_POST['info'];
$query="INSERT INTO wedding (dbName,Email,dbPhone,dbDate,Guestnumber	,Moreinfo)VALUES ('$Name','$email','$phone','$date','$guest','$info')";
mysqli_query($con,$query) or die(mysqli_error($con));
header("location:wedding.html");
?>