<?php
include ("inc\connect.php");
$Name=$_POST['name'];
$review=$_POST['review'];
$rating=$_POST['rating'];
$query="INSERT INTO addreview (	dbName,Review,Rating)VALUES ('$Name','$review','$rating')";
mysqli_query($con,$query) or die(mysqli_error($con));
header("location:reviews.html");
?>