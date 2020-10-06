<?php 
session_start(); 
 echo $_POST['uname'];
include "connect.php";
if($_POST['uname']=="" ||$_POST['password']==""){
echo "jwhe";
if(empty($_POST['uname'])){
echo "jrf";
header("Location: index.php?error=User Name is required");
exit();
}


else if(empty($_POST['password'])){
echo " no password";}
  header("Location: index.php?error=Password is required");
exit();
}
else{
echo "hurry";
	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);
	$hashedpasss=password_hash($pass,PASSWORD_DEFAULT);
$sql = "SELECT * FROM usertable WHERE email='$uname' AND pass='$pass'";
$result = mysqli_query($conn, $sql);
print_r(mysqli_num_rows($result));

if (mysqli_num_rows($result) === 1) {
	$row = mysqli_fetch_assoc($result);
	if ($row['email'] === $uname && $row['pass'] === $pass) {
		$_SESSION['email'] = $row['email'];
		$_SESSION['uname']=$row['uname'];
		header("Location:collection.php");
		exit();
	} else {
		header("Location: index.php?error=Incorect User name or password");
		exit();
	}
} else {
	header("Location: index.php?error=Incorect User name or password,Contact ".$hashedpass);
	exit();
}

}
echo "<div display='none'>  <script type='text/javascript'>      console.log(' no console log message');  </script> </div>";

 
exit();
?>
