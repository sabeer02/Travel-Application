<?php
include 'config1.php';
session_start();
if($conn->connect_error){
	die("connection failed");
}

$email = $_POST["email"];
$password = $_POST["password"];
$salt = "jcomp";
$password_encrypted = sha1($password.$salt);


$sql = mysqli_query($conn, "SELECT count(*) as total from user WHERE email = '".$email."' and password = '".$password_encrypted."'");

$row = mysqli_fetch_array($sql);

if($row["total"] > 0){
	$sql1=mysqli_query($conn, "SELECT ID from user WHERE email = '".$email."' and password = '".$password_encrypted."'");
	$rows = mysqli_fetch_assoc($sql1);
	$_SESSION["user-id"]=$rows['ID'];
	print_r($_SESSION);
	header("Location:home.php");
	?>
	
	<?php
}
else{
	?>
	<script>
		alert('Login failed');
		document.location.href='signlog.php';
	</script>
	<?php
}








?>