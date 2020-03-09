<?php

 if($_SERVER['REQUEST_METHOD']=='POST'){

//  include 'config.php';

 
//Define your host here.
$HostName = "45.77.254.49";

//Define your database username here.
$HostUser = "admin_touch";

//Define your database password here.
$HostPass = "touch1234";

//Define your database name here.
$DatabaseName = "admin_GDragon";
 
 $con = mysql_connect($HostName,$HostUser,$HostPass,$DatabaseName);
 
//  $email = $_POST['email'];
//  $password = $_POST['password'];
 
 $Sql_Query = "select * from Member";
 
 $check = mysql_fetch_array(mysqli_query($con,$Sql_Query));
 
 if($con){
 
 echo "Data Matched";
 }
 else{
 echo "Invalid Username or Password Please Try Again";
 }
 
 }else{
 echo "Check Again";
 }
// mysql_close($con);

?>