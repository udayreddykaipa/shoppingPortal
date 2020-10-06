<?php
 use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\Exception;
session_start(); 

include '../connect.php';

 function validate($data){
       $data = trim($data);
           $data = stripslashes($data);
           $data = htmlspecialchars($data);
           return $data;
        }

 $email = validate($_GET['email']);
//echo $email;
$sql="SELECT * FROM usertable WHERE email='$email'";
$result = mysqli_query($conn, $sql);
print_r($result);
if (mysqli_num_rows($result) === 1) {
	
	//Generate a random string.
	$token = openssl_random_pseudo_bytes(16);
 
	//Convert the binary data into hexadecimal representation.
	$token = bin2hex($token);
 
	//Print it out for example purposes.
//	echo $token;

		$message = "<h2>Password Reset</h2><p>Your Account:</p><p>Email: ".$email."</p><p>Please click the link below to reset your password.</p><a href='http://veshbusha.com/loginl/forget/password_reset.php?code=".$code."&user=".$row['id']."'>Reset Password</a>";
                                //Load phpmailer
                        require 'vendor/autoload.php';
			  $mail = new PHPMailer(true);


			try {
                                //Server settings
                                $mail->isSMTP();
                                $mail->Host = 'smtp.gmail.com';
                                $mail->SMTPAuth = true;
                                $mail->Username = 'udaykumar8244@gmail.com';     
                                $mail->Password ='7330770461Uk';  // 'veshbusha@123';
                                $mail->SMTPOptions = array(
                                    'ssl' => array(
                                    'verify_peer' => false,
                                    'verify_peer_name' => false,
                                    'allow_self_signed' => true
                                    )
                                );
                                $mail->SMTPSecure = 'ssl';
                                $mail->Port = 465;
                                $mail->setFrom('udaykumar8244@gmail.com');

                                //Recipients
                                $mail->addAddress($email);
                                $mail->addReplyTo('udaykumar8244@gmail.com');

                                //Content
                                $mail->isHTML(true);
                                $mail->Subject = 'Vesh Busha Password Reset';
                                $mail->Body    = $message;

echo "working";
echo "working";
                                $mail->send();

                                $_SESSION['success'] = 'Password reset link sent';

                            } 
                            catch (Exception $e) {
			echo "error sorry".$mail->ErrorInfo;
//                                $_SESSION['error'] = 'Message could not be sent. Mailer Error: '.$mail->ErrorInfo;
				}


}
else{

echo "jdshk";
    
}
?>
