
<?php  
include 'config1.php';
if($conn->connect_error){
	die("connection failed");
}

$name = $_POST["name"];
$email = $_POST["email"];
$gender = $_POST["gender"];
$phn = $_POST["phn"];
$adr = $_POST["adr"];
$st = $_POST["st"];
$country = $_POST["country"];
$password = $_POST["password"];
$salt = "jcomp";
$password_encrypted = sha1($password.$salt);

$select = mysqli_query($conn, "SELECT * FROM user WHERE email = '".$_POST['email']."'");
if(mysqli_num_rows($select)) {
    ?>
	<script>
		alert('this email id already exist, try with a new email id');
		document.location.href='signlog.php';
	</script>
	<?php
}
else{

$sql = "INSERT INTO user (name, gender, email, phonenumber, address, state, country, password) VALUES ('$name','$gender','$email','$phn','$adr','$st','$country','$password_encrypted')";

if($conn->query($sql) === TRUE){
	?>
	<script>
		alert('Values have been inserted');
		document.location.href='signlog.php';
	</script>
	<?php
}
else{
	?>
	<script>
		alert('Values did not insert');
		document.location.href='signlog.php';
	</script>
	<?php
}

}
?>




















