<?php
include ("inc\connect.php");
$revID=$_GET['ID'];
$sql="DELETE FROM addreview WHERE id=$revID";
mysqli_query($con,$sql);
header("location:viewreviews.php#rev");?>