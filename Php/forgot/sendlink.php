<?php

echo "FD";
?>
/*<?php
// use PHPMailer\PHPMailer\PHPMailer;
 //       use PHPMailer\PHPMailer\Exception;


session_start(); 
$_POST['email']
$localhost = "localhost";
$user      = "veshbhusa";
$password  = "vBnOIDA";
$database  = "userDB";
$conn = new mysqli($localhost,$user,$password,$database);
if($conn->connect_error){
        die("connection failed : ".$conn->connect_error);
echo $conn->connect_error;
}

echo"jkshf";
 function validate($data){
       $data = trim($data);
           $data = stripslashes($data);
           $data = htmlspecialchars($data);
           return $data;
        }

 $email = validate($_POST['email']);

//check if user with email exists
$sql="SELECT * FROM usertable WHERE email='$email' ";
$result = mysqli_query($conn, $sql);


//header("Location: forgotPage.php");
//exit();

?>
/*

if (mysqli_num_rows($result) === 1) {
	
	//Generate a random string.
	$token = openssl_random_pseudo_bytes(16);
 
	//Convert the binary data into hexadecimal representation.
	$token = bin2hex($token);
 
	//Print it out for example purposes.
	echo $token;
	
	//store token
	$sql1="INSERT INTO forgot (email,token) VALUES('$email','$token')"	
	
	//send mail
	$message = "<h2>Password Reset</h2><p>Your Account:</p><p>Email: ".$email."</p><p>Please click the link below to reset your password.</p><a href='http://veshbusha.com/loginl/forget/password_reset.php?code=".$code."&user=".$row['id']."'>Reset Password</a>";
                                //Load phpmailer


} else {
        header("Location: forgotPage.php?error=No accoutn exists with email ");
        exit();
}
                        require 'vendor/autoload.php';

                        $mail = new PHPMailer(true);
                            try {
                                //Server settings
                                $mail->isSMTP();
                                $mail->Host = 'smtp.gmail.com';
                                $mail->SMTPAuth = true;
                                $mail->Username = 'veshbusha52@gmail.com';     
                                $mail->Password = 'veshbusha@123';
                                $mail->SMTPOptions = array(
                                    'ssl' => array(
                                    'verify_peer' => false,
                                    'verify_peer_name' => false,
                                    'allow_self_signed' => true
                                    )
                                );
                                $mail->SMTPSecure = 'ssl';
                                $mail->Port = 465;
                                $mail->setFrom('support@veshbusha.com');

                                //Recipients
                                $mail->addAddress($email);
                                $mail->addReplyTo('support@veshbusha.com');

                                //Content
                                $mail->isHTML(true);
                                $mail->Subject = 'Vesh Busha Password Reset';
                                $mail->Body    = $message;

                                $mail->send();

                                $_SESSION['success'] = 'Password reset link sent';

                            } 
                            catch (Exception $e) {
                                $_SESSION['error'] = 'Message could not be sent. Mailer Error: '.$mail->ErrorInfo;
				}
*/
