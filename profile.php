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
<style>
.button {
  display: inline-block;
  padding: 15px 25px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #FF416C;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
</style>
	<title>SignUp and Login</title>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
</head>
<?php 
				
				$sql = "SELECT * FROM user WHERE id='{$_SESSION["user-id"]}'";
				$result = mysqli_query($conn, $sql);
				if (mysqli_num_rows($result) > 0) {
					while ($row = mysqli_fetch_assoc($result)) {
            ?>
<body  style="background-color:#FF416C;">
<?php
include('header.php');
?>
<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
			<img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
			<span class="font-weight-bold"><?php echo $row['name'] ;?></span>
			<span class="text-black-50"><?php echo $row['email'] ;?></span>
			<span> </span>
			</div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">My Profile</h4>
                </div>
				<form action="logout.php" method="post" enctype="multipart/form-data">
				

                <div class="row mt-2">
                    <div class="col-md-12"><label class="labels">Name</label><input type="text" class="form-control" placeholder="<?php echo $row['name'] ;?>" value="<?php echo $row['name'] ;?>"></div>
                </div>
                <div class="row mt-3">
					<div class="col-md-12"><label class="labels">Gender</label><input type="text" class="form-control" placeholder="Gender" value="<?php echo $row['gender'] ;?>"></div>
                    <div class="col-md-12"><label class="labels">Mobile Number</label><input type="text" class="form-control" placeholder="enter phone number" value="<?php echo $row['phonenumber'] ;?>"></div>
                    <div class="col-md-12"><label class="labels">Address</label><input type="text" class="form-control" placeholder="enter address line 1" value="<?php echo $row['address'] ;?>"></div>
                    <div class="col-md-12"><label class="labels">Email ID</label><input type="text" class="form-control" placeholder="enter email id" value="<?php echo $row['email'] ;?>" ></div>
					
                   
                </div>
                <div class="row mt-3">
                    <div class="col-md-6"><label class="labels">Country</label><input type="text" class="form-control" placeholder="country" value="<?php echo $row['country'] ;?>"></div>
                    <div class="col-md-6"><label class="labels">State/Region</label><input type="text" class="form-control" placeholder="state"  value="<?php echo $row['state'];?>"></div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-3 py-5">
				<br><br><br><br><br><br><br><br>
                <div class="mt-5 text-center"><button class="button">logout</button></div>
				</form>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<?php 
}
}
?>
</body>
</html>
<?php 
include 'footer.php';
 ?>