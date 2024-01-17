<?php
session_start();
error_reporting(E_ALL & ~E_NOTICE);
if (!isset($_SESSION["user-id"])) {
    header("Location: signlog.php");
}
include 'header.php';
include 'config1.php';
$salt = "jcomp";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charse
	t="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Car Booking Site</title>
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="DEMO.css">
	<link rel="stylesheet" type="text/css" href="DEMO.CSS">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
</head>
<body>
	<div class="header">
<div class="container">
	<div class="navbar">
		<div class="logo">
			<img src="image1.jpg" width="125px">
		</div>
	</div>
	<div class="row">
		<div class="col-2">
			<h1>Choose Your Majestic Ride <br>Now and Earn Best Deals!</h1>
			<p>Ever had to give up on your favourite car becasue you ran short of money?<BR> Now is the time. We have arranged excited deals for the best cars to which you can never say NO!</p>
			<a href="#" class="bttn">Choose Now &#8594;</a>
		</div>
		<div class="col-2">
			<img src="image2.jpg" height="500px" align="right">
	</div>
</div>
</div>
<div class="categories">
	<div class="small-conatiner">
	<div class="row">
		<div class="col-3">
			<img src="pic1.jpg" height="300" width="600">
			<div class="col-3">
				<img src="pic2.jpg" height="300" width="600">

				<div class="col-3">
					<img src="pic3.webp" height="300" width="600">

			
		</div>
	</div>
	</div>
</div>
<div class="small-conatiner">
	<h2 class="title">Available Cars</h2>
	<div class="row">
		<div class="col-4">
			<img src="photo1.jpg" width="600" height="300" align="left">
			<h4>Tata Nexon </h4>
			<div class="rating"></div>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star-o"></i>
			<p>Rs 25/K.M</p>
		</div>
	</div> 
</div>
<div class="col-4">
			<img src="photo2.webp" height="300" width="600">
			<h4>Innova Crysta </h4>
			<div class="rating"></div>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star-o"></i>
			<p>Rs 40/K.M </p>
		</div>
		<div class="col-4">
			<img src="photo3.jpg" height="300" width="600">
			<h4>Maruti Brezza </h4>
			<div class="rating"></div>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star-o"></i>
			<p>Rs 15/K.M  </p>
		</div>
			<img src="photo4.jpg" height="300" width="600">
			<h4>Renault Duster </h4>
			<div class="rating"></div>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star-o"></i>
			<p>Rs 20/K.M </p>
		</div>
		<div class="offer">
			<div class="small-conatiner">
				<div class="row">
					<div class="col-2">
						<img src="snap.jpg" class="offer-image">
					</div>
					<div class="col-2">
						<h3>Only Available In Our Site</h3>
						<h1>Free Insurance Cover for customers upto 5 years*</h1>
						<small>Life is very Preious. Being insured in every part of life is truly essential<br> We knows this and thus we are committed to provide you free insurance uupto 5 years depending on the mode of vehicle you choose. </small>
					</div>
				</div>
			</div>
		</div>
		<div class="testimonial">
			<div class="small-conatiner"></div>
			<div class="col-3">
				<p>We have been a pioneer in the car industry and hence we envision the market where people live in harmony witn thier favourite rides.<br> Unparalleld Customer Satisfaction is Must.</p>
				<img src="car.jpg">
				<h3>Our Mission </h3>
			</div>
			</div>
		</div>
		<div class="brands">
			<div class="small-conatiner">
				<div class="row">
					<div class="col-5">
						<img src="gpay.png">
					</div>
					<div class="col-5">
						<img src="mcard.png">
					</div>
					<div class="col-5">
						<img src="online.jpg">
					</div>
					<div class="col-5">
						<img src="wallet.png">
					</div>
					
				</div>
			</div>
		</div>
		<div class="footer">
			<div class="container">
				<div class="row">
					<div class="footer-col-1">
						<h3>Download Our App </h3>
						<p>Download Our App For Playstore and IOS</p>
					</div>
					<div class="footer-col-2">
						<img src="">
						<p>You Demand, We Serve </p>
				</div>
				<div class="footer-col-3">
						<h3>Useful Links </h3>
						<ul>
							<li>Coupons</li>
							<li>Bogs</li>
							<li>Return Policy</li>
							<li>Careers</li>
						</ul>
			</div>
			<div class="footer-col-4">
				<ul>
				<h3>Follow Us</h3>
				<li>Instagram</li>
				<li>Facebook</li>
							<li>Twiiter</li>
							<li>YouTube</li>
						</ul>

		</div>
</body>
</html>
<?php 
include 'footer.php';
 ?>