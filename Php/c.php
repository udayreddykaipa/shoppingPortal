
<!DOCTYPE html>
<html lang="en">

<head>
	<title>AAINA</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/css-bootstrap.min.css">
	<link rel="stylesheet" href="css/trialroomcollections-style.css">

<link rel="stylesheet" href="css/css-font-awesome.min.css">
	<link
		href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&amp;display=swap"
		rel="stylesheet">
</head>

<body>

	<!------------------------------login form-------------------->
<?php
session_start();
//print_r($_SESSION);
include  "connect.php";
?>

<?php
if($_SESSION['email']==""){
	header("Location:index.php");
	exit();
}else{
}

?>

	<header class="header-2">
		<div class="top-header-logo">
			<div class="container">
				<div class="row">
					<div class="header-logo-new">
						<a href="trialroomcollections.html"><img src="images/images-logo.png"></a>
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="top-search">
						<input type="text" name="search" placeholder="Search.."></div>
					<div class="header">
						<div class="navbar-right nav_menu">
							<div id="mySidenav" class="sidenav">
								<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
								<a href="#">HOME</a>
								<a href="#">ABOUT</a>
								<a href="#">SERVICES</a>
								<a href="#">PORTFOLIO</a>
								<a href="#">ADVERDISEMENT</a>
								<a href="#">COMPANY TRIP</a>
								<a href="#foot">CONTACT</a>
								<a href="user-profile.php">EDIT PROFILE</a>
								<a href="signout.php">SIGN OUT</a>
							</div>

							<span class="mr-auto" style=" " onclick="openNav()"> <i class="fa fa-bars"
									aria-hidden="true"></i></span>
						</div>
					</div>

				</div>
			</div>
		</div>
	</header>



<section>
<div class="card-group">



<?php 
$sql = "SELECT * FROM items";
$result = mysqli_query($conn, $sql);

	for($x=0;$x<(mysqli_num_rows($result));$x++){
$row = mysqli_fetch_assoc($result);
echo $row;
	echo '<div class="col-md-3 col-sm-6 col-xs-6"><div class="product-desigm"><img src="images/images-product-img-2.jpg" /><div class="heart-icon"><i class="fa fa-heart"></i></div><h2>PUBG Avatar T-shirt<div class="price"><span class="h5">Rs 349</span></div><div class="product-btn"><button class="TRY-ME">TRY ME</button><button type="button" class="Update-VTR"><i class="fa fa-hopping-cart" aria-hidden="true"></i></button></div></h2></div></div>';

	}

?>
</div>
</section>


	<footer>
		<div class="top-footer">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="footer-logo">
							<img src="images/images-logo.png"></div>
					</div>

					<div class="col-md-4">
						<div class="footer-widget-1">
							<h2>Office Address</h2>
							<p>Sector-74, Noida, U.P</p>
						</div>
					</div>

					<div class="col-md-4">
						<div class="footer-widget-1">
							<h2>Work Inquiries</h2>
							<ul>
								<li>Phone: 0120-4223814</li>
								<li>Email: support@veshbusha.com</li>
							</ul>
						</div>
					</div>

					<div class="col-md-4">
						<div class="footer-widget-1">
							<h2>Work Inquiries</h2>
							<ul class="footer-icon-style">
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>

				</div>
			</div>
		</div>
	<footer id="foot"></footer>
		<div class="bottom-footer">
			<div class="container">
				<div class="row">

					<div class="col-md-8">
						<div class="footer-widget-2">
							<p> &copy; Copyright &copy; 2020 VeshBusha.com</p>
						</div>
					</div>

					<div class="col-md-3">
						<div class="footer-widget-4">
							<ul class="footer-link">
								<li><a href="#">Terms &amp; Conditions</a></li>
								<li><a href="#">Privacy Policy</a></li>
							</ul>
						</div>
					</div>

				</div>
			</div>
		</div>

	</footer>
	<!----------------------------Footer End-------------------------->
	<script src="js/5577-js-jquery.min.js"></script>
	<script src="js/8644-js-bootstrap.min.js"></script>
	<script>

		function openNav() {
			document.getElementById("mySidenav").style.width = "200px";
		}

		function closeNav() {
			document.getElementById("mySidenav").style.width = "0";
		}

		$(document).ready(function () {
			$('#Carousel').carousel({
				interval: 5000
			})
		});


	</script>
</body>

</html>
