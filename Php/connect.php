<?php 

$localhost = "localhost";
$user      = "veshbhusa";
$password  = "vBnOIDA";
$database  = "userDB";
$GLOBALS['con']= $con;
$conn = new mysqli($localhost,$user,$password,$database);
if($conn->connect_error){
	die("connection failed : ".$conn->connect_error);
echo $conn->connect_error;
}


 ?>
