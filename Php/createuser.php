<?php 
session_start(); 
 echo $_POST['name'];
 echo $_POST['email'];
 echo $_POST['contact'];
 echo $_POST['password'];
include "connect.php";

 function validate($data){
       $data = trim($data);
           $data = stripslashes($data);
           $data = htmlspecialchars($data);
           return $data;
        }

        $name = validate($_POST['name']);
        $pass = validate($_POST['password']);        
	$num = validate($_POST['contact']);
        $email = validate($_POST['email']);
	$hashedpass=password_hash($pass,PASSWORD_DEFAULT);
$sql = "INSERT INTO usertable (email,uname,phone,pass) VALUES ('$email','$name','$num', '$pass')";
$result = mysqli_query($conn, $sql);
print_r($result);
if($result){
echo "success";
header("Location:index.php");
exit();

}else{
echo "failed";
header("Location: signup.php?error=Error occured in creating user, Email might be registered");
                exit();

}

?>
