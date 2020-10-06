<?php 
session_start(); 
 echo $_GET['name'];
 echo $_GET['email'];
 echo $_GET['contact'];
 echo $_GET['password'];
include "connect.php";

 function validate($data){
       $data = trim($data);
           $data = stripslashes($data);
           $data = htmlspecialchars($data);
           return $data;
        }

        $name = validate($_GET['name']);
        $pass = validate($_GET['password']);        
	$num = validate($_GET['contact']);
        $email = validate($_GET['email']);
$sql = "INSERT INTO usertable (email,uname,phone,pass) VALUES ('$email','$name','$num', '$pass')";
$result = mysqli_query($conn, $sql);
print_r($result)
if($result){
echo "success"
header("Location:index.php");
exit();
}else{
echo "failed"
header("Location: signup.php?error=Error occured in creating user, Email might be registered");
                exit();
}
?>
