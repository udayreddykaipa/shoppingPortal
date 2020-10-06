<?php $pass='uday@1024';
$hassed=password_hash($pass,PASSWORD_DEFAULT);
if(password_verify('$2y$10$avPq.zaHxiZBIvuglINgrecVDlJ1ptOkloQ7/vt2Q2ADKxUAvuMuy',$pass)){
echo "valid";
}else{
echo "on";
}

//echo $hassed;
?>
