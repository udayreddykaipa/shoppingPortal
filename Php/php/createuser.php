


<?php 
session_start(); 
 echo $_GET['uname'];
include "connect.php";
if($_GET['uname']=="" ||$_GET['password']==""){
echo "jwhe";
if(empty($_GET['uname'])){
echo "jrf";
header("Location: index.php?error=User Name is required");
exit();
}


else if(empty($_GET['password'])){
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

	$uname = validate($_GET['uname']);
	$pass = validate($_GET['password']);
$sql = "SELECT * FROM usertable WHERE uname='$uname' AND pass='$pass'";
$result = mysqli_query($conn, $sql);
print_r(mysqli_num_rows($result));

if (mysqli_num_rows($result) === 1) {
	$row = mysqli_fetch_assoc($result);
	if ($row['uname'] === $uname && $row['pass'] === $pass) {
		$_SESSION['uname'] = $row['uname'];
		$_SESSION['email'] = $row['email'];
		$_SESSION['id'] = $row['id'];
		header("Location:collection.html");
		exit();
	} else {
		header("Location: index.php?error=Incorect User name or password");
		exit();
	}
} else {
	header("Location: index.php?error=Incorect User name or password");
	exit();
}

}
echo "<div display='none'>  <script type='text/javascript'>      console.log(' no console log message');  </script> </div>";

 
exit();
?>
