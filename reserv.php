<?php
session_start();
error_reporting(E_ALL & ~E_NOTICE);
if (!isset($_SESSION["user-id"])) {
    header("Location: signlog.php");
}
include 'config1.php';
$salt = "jcomp";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<?php include('reservation.php'); ?>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
<style type="text/css">
	@import url('https://fonts.googleapis.com/css2?family=Cabin&family=Caveat:wght@500&family=Cinzel:wght@600;900&family=Dancing+Script:wght@600&family=Gelasio&family=Great+Vibes&family=IM+Fell+English+SC&family=Kaisei+Decol:wght@500&family=Noto+Serif+Display:ital,wght@1,300&family=PT+Serif:ital@1&family=Playball&family=Smooch&display=swap');
	*
	{
		margin: 0;
		padding: 0;
	}
	body
	{
		background: url('rest1.jpg');
		background-size: cover;	
	}
	.nav
	{
		width: 100%;
		height: 70px;
		background: rgba(0, 0, 0, 0.4);

	}
	.navi
	{
		padding: 15px;
		float: right;
		display: inline-block;
		
	}
	.btn1
	{
		border-radius: 20px 20px 20px 20px;
		font-size: 16px;
		width: 80%;
		height: 45px;
		margin-left: -50%;
		background: linear-gradient(to right,#729fe0,#d3be63);
		border: 1px solid white;
	}	
	.btn2
	{
		border-radius: 20px 20px 20px 20px;
		font-size: 16px;
		width: 100px;
		height: 45px;
		margin-left: 10%;
		background: linear-gradient(to right,#729fe0,#d3be63);
		border: 1px solid white;
	}
	.btn:hover
{
	cursor: pointer;
	box-shadow: inset 300px 0 0 0 #69F3A5;
	text-transform: uppercase;
}
label
{
	display: inline-block;
	margin: 10px;
	width: 180px;
	font-size: 18px;
	font-weight: bold;
	font-family: 'Dancing Script', cursive;
	color: yellow;
}
.signup-form
{
	border-radius: 10px;
	background: rgba(0, 0, 0, 0.5);
	color: white;
	width: 600px;
	max-height: 100vh;
	margin-top: 10px;
	
}
.signup-form h1
{
	padding: 10px;
	font-family: 'Dancing Script', cursive;
}
h1
{
	text-align: center;
}
input
{
	padding: 5px;
	margin: 5px;
	font-size: 14px;
	border-radius: 10px;
	border: 1px solid #f9f9f9;
	width: 7cm;
	background-color: transparent;
	color: white;
}
input::placeholder
{
	color: white;
	font-weight: bold;
	font-style: italic;
	font-family: 'Nanum Myeongjo', serif;
}
small
{
	display: inline-block;
	margin-left: 10px;
}
.signup-form
{
	padding: 5px;
	margin-left: 30%;

}
select
{
	padding: 5px;
	margin: 5px;
	font-size: 14px;
	border-radius: 10px;
	border: 1px solid #f9f9f9;
	width: 7cm;
	background-color: transparent;
	color: #1EECE8;
}
.sub
{
	border-radius: 15px 15px 15px 15px;
	border: 2px solid #0986F7;
	background: transparent;
	width: 90px;
	height: 40px;
	margin-left: 40%;
	padding: 10px;
	margin-top: 5px;
	font-size: 16px;
	font-weight: bold;
	color: white;

}
.sub:hover
{
	cursor: pointer;
	box-shadow: inset 300px 0 0 0 #0986F7;
	text-transform: uppercase;
}
.form-group
{
	margin: 5px;
}

#error
{
	color: red;
	margin-left: 35%;
	font-size: 17px;
	
	position: relative;
}
</style>
<body>
<?php
include('header.php');
?>
	<div class="nav">
		<div class="navi">
			<nav> <button class="btn btn1">View Reservations</button> 
		<a href=""><button class=" btn btn2">Logout</button></a> </nav>
		</div>
	</div>
	<div class="signup-form">
		<h1>RESTAURANT BOOKING</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <div class="form-group">
            <label>First Name</label>
                <input type="text" class="form-control" name="fname" placeholder="Enter Your First Name" ><p>
                <span id="error"> <?php echo $err_fname;  ?> </span></p>
            </div>
            <div class="form-group">
            <label>Middile Name</label>
                <input type="text" class="form-control" name="mname" placeholder="Enter Your Middile Name">
                <br>
            </div>
            <div class="form-group">
            <label>Last Name</label>
                <input type="text" class="form-control" name="lname" placeholder="Enter Your Last Name" >
                <p>
                <span id="error"><?php echo $err_lname;  ?> </span></p>
            </div>   
            <div class="form-group">
            <label>Enter Date</label>
        	<input type="date" class="form-control" name="date" placeholder="Enter the Date">
        	<p>
                <span id="error"> <?php echo $err_date;  ?></span></p>
            </div>
            <div class="form-group">
		<label> Timing</label>
		<select class="form-control" name="time">
		<option>9:00 - 12:00</option>
		<option>12:00 - 15:00</option>
		<option>16:00 - 20:00</option>
		<option>20:00 - 00:00</option>
		</select>
		<p>
                <span id="error"></span></p>
            </div>
            <div class="form-group">
            <label> Number Of Guests</label>
        	<input type="number" class="form-control" min="1" name="num_guests" placeholder="Enter the Number Of Guests" >   
        	<p>
                <span id="error"><?php echo $err_guest;  ?> </span></p> 
            </div>
            <div class="form-group">
            <label> Email Id</label>
        	<input type="Email" class="form-control"  name="user_mail" placeholder=" Enter your Mail id" >
        	<p>
                <span id="error"><?php echo $err_mail;  ?> </span></p>    
            </div>
            <div class="form-group">
            <label for="guests">Mobile Number</label>
                <input type="telephone" class="form-control" name="tele" placeholder="Enter your Telephone Number">
                <p>
                <span id="error"><?php echo $err_tel;  ?> </span></p>
            </div>  
            <div class="form-group">
            <button type="submit" name="reserv-submit" class="sub">Book</button>
            </div>
        </form>
        <br><br>
    </div>

</body>
</html
<?php 
include 'footer.php';
 ?>