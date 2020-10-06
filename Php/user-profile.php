
<!DOCTYPE html>
<html lang="en"><head><title>AAINA</title><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="css/css-bootstrap.min.css"><link rel="stylesheet" href="css/trialroomcollections-style.css"><link rel="stylesheet" href="css/css-font-awesome.min.css"><link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&amp;display=swap" rel="stylesheet"></head><body>
		
<!------------------------------login form-------------------->
<?php
session_start();
//print_r($_SESSION);

?>

<?php
if($_SESSION['email']==""){
        header("Location:index.php");
        exit();
}else{
}

?>


<header><div class="container">
		<div class="row">
		
			<div class="col-md-6">
				<div class="site-logo">
					<a href="#"><img src="images/images-logo.png"></a>	
				</div>
			</div>
			
			<div class="col-md-6">
				<div class="site-loin">
					<a href="signout.php">logout</a>
				</div>			
			</div>			
		</div>
	</div>
</header><section class="user-profile-form"><div class="container">
		<div class="row">
		
			<div class="col-md-12">
				<div class="profile-details">
				<h1>Create Youe Profile</h1>
				<form action="saveprofile.php" method="POST" enctype="multipart/form-data"  name="toggle_boxes">
  
				  <div class="flavor">
					<input type="radio" id="radio_male" name="flavor" value="male"><label for="radio_male" class="male"><img src="images/images-mail-icon.jpg">Male</label>
					
					<input type="radio" id="radio_female" name="flavor" value="female"><label for="radio_female" class="female"><img src="images/images-female-icon.jpg">Female</label>
				  </div>

					<div class="submit-profile-form">
						<div class="form-group">
							<input type="text" name="height" placeholder="Height"><span class="field-icon1">
									<img src="images/images-height-1.jpg"></span>							
						</div>
						
						<div class="form-group">
							<input type="text" name="Weight" placeholder="Weight"><span class="field-icon1">
									<img src="images/images-height-2.jpg"></span>							
						</div>						
						
						<div class="form-group">
							  <input type="file" accept="image/*" name="img1" capture="camera" placeholder="Front Photo"><span class="field-icon1">
									<img src="images/images-height-3.jpg"></span>							
						</div>							
						<div class="form-group">
							  <input type="file" accept="image/*"  name="img2" capture="camera" placeholder=""><span class="field-icon1">
									<img src="images/images-height-4.jpg"></span>							
						</div>	
						
						<div class="form-group">
								<button type="submit"  name="uploadBtn" value="Upload" class="btn btn-custom">Create Profile Screen</button>
						</div>						
						
					</div>
					
				</form>
				
				</div>
			</div>
					
		</div>
	</div>
</section><!----------------------------Footer End--------------------------><script src="js/6587-js-jquery.min.js"></script><script src="js/6144-js-bootstrap.min.js"></script></body></html>
