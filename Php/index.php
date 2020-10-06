

<!DOCTYPE html>
<html lang="en"><head><title>AAINA</title><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="css/css-bootstrap.min.css"><link rel="stylesheet" href="css/trialroomcollections-style.css"><link rel="stylesheet" href="css/css-font-awesome.min.css"><link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&amp;display=swap" rel="stylesheet"></head><body>
		
<!------------------------------login form----------------->

<?php
session_start();
//print_r($_SESSION);
if($_SESSION['email']!=""){
	header("Location:collection.php");
                exit();
}

?>
<section class="loginform"><div class="container">
		<div class="row">
			<div class="col-md-12">
			
				<div class="log-in">
					<div class="logo">
						<img src="images/images-logo.png"></div>
						<form action="loginvalidate.php" method="POST">
						<h1>Sign In</h1>
							<div class="form-group">
							<input type="text"   name="uname" placeholder="Enter Email"><span class="fiel-icon">
									<i class="fa fa-envelope"></i>
								</span>							
							</div>
							<div class="form-group">

						<input type="password" name="password"  placeholder="Enter Password"><span class="fiel-icon">
									<i class="fa fa-key"></i>
								</span>							
							</div>
							<div class="form-group">
							<button class="btn btn-custom">Sign In</button>
							</div>
							<div class="alert alert-danger" role="alert">
							     	<?php if (isset($_GET['error'])) { ?>
						     		<p class="error"><?php echo $_GET['error']; ?></p>
							     	<?php } ?>
							</div>
							<div class="form-content">
								<p>Don't have an account? <a href="signup.php">Register Now</a></p>
								<p><a href="forgot/password_forgot.php">I forgot my password</a></p>
							</div>
					   </form>
				</div>
			</div>
		</div>
	</div>
</section><!----------------------------Footer End--------------------------><script src="js/9935-js-jquery.min.js"></script><script src="js/5814-js-bootstrap.min.js"></script></body></html>
