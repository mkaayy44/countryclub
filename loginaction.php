<?php
include ("inc\connect.php");
$email=$_POST['email'];
$password=$_POST['password'];
$sql="SELECT *FROM members WHERE Email='$email' AND dbpassword='$password'" ;
$result=mysqli_query($con,$sql) ;
if(mysqli_num_rows($result)>0){
 header("location:index1.html");
}
else{
    header("location:signup.html?error=1");
}

