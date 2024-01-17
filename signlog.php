<?php
session_start();
if (isset($_SESSION["user-id"])) {
    ?>
<script>
		alert('you had already signed in ');
		document.location.href='home.php';
</script>
<?php
}

include 'config1.php';
$salt = "jcomp";
?>
<!DOCTYPE html>

<html>
<head>
	<title>SignUp and Login</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div class="container" id="container">
<div class="form-container sign-up-container">

<form action="signup.php" method="post">
	<h1>Create Account</h1>
	<div class="social-container">
		<a href="#" class="social"><i class="fa fa-facebook"></i></a>
		<a href="#" class="social"><i class="fa fa-google"></i></a>
		<a href="#" class="social"><i class="fa fa-linkedin"></i></a>
	</div>
	<span>or use your email for registration</span>
	<input type="text" autocomplete="off" name="name" placeholder="Name" required> 
	<input type="text" name="m" placeholder="Select the gender" disabled required>
	<div style=" width:50%; margin-left:-20%;">
    <input type="radio"  name="gender" value="Male" required><span>MALE</span> 
	</div>
	<div style=" width:10%;margin-left:20%;margin-top:-49px; ">
    <input type="radio"  name="gender" value="Female" required><span> FEMALE</span>  
	</div>
	
	<input type="email" name="email" placeholder="Email" required>
	<input type="number" name="phn" placeholder="Phone number" required>
	<input type="text" name="adr" placeholder="Address" required>
	<input type="text" name="st" placeholder="State" required>
	<input type="text" name="country" placeholder="Country" required>
	<input type="password" name="password" placeholder="Password" required>

	<button id="sign">Submit</button>
</form>
</div>
<div class="form-container sign-in-container">
	<form action="signin.php" method="post">
		<h1>Sign In</h1>
		<div class="social-container">
		<a href="#" class="social"><i class="fa fa-facebook"></i></a>
		<a href="#" class="social"><i class="fa fa-google"></i></a>
		<a href="#" class="social"><i class="fa fa-linkedin"></i></a>
	</div>
	<span>or use your account</span>
	<input type="email" name="email" placeholder="Email" required>
	<input type="password" name="password" placeholder="Password" required>
	<a href="#">Forgot Your Password</a>

	<button>Sign In</button>
	</form>
</div>
<div class="overlay-container">
	<div class="overlay">
		<div class="overlay-panel overlay-left">
			<h1>Welcome Back!</h1>
			<p>To keep connected with us please login with your personal info</p>
			<button class="ghost" id="signIn">Sign In</button>
		</div>
		<div class="overlay-panel overlay-right">
			<h1>Hello, Friend!</h1>
			<p>Enter your details and start journey with us</p>
			<button class="ghost" id="signUp">Sign Up</button>
		</div>
	</div>
</div>
</div>

<script type="text/javascript">
	const signUpButton = document.getElementById('signUp');
	const signInButton = document.getElementById('signIn');
	const container = document.getElementById('container');

	signUpButton.addEventListener('click', () => {
		container.classList.add("right-panel-active");
	});
	signInButton.addEventListener('click', () => {
		container.classList.remove("right-panel-active");
	});
</script>


</body>
</html>








