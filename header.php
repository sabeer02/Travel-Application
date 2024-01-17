<?php
session_start();
error_reporting(E_ALL & ~E_NOTICE);
include 'config1.php';
$salt = "jcomp";
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/header.css">

</head>
<body>
   
<!-- header section starts  -->

<section class="header">

   <a href="home.php" class="logo">travel.</a>

   <nav class="navbar">
      <a href="home.php">home</a>
      <a href="book.php">book</a>
      <a href="reserv.php">restaurant booking</a>
      <a href="DEMO.php">transport booking</a>
      <a href="feedback.php">feedback</a>
      <a href="profile.php">profile</a>
      <a href="about.php">about</a>
      <?php
            if (!isset($_SESSION["user-id"])) { 
      ?>
              <a href="signlog.php">login</a>
      <?php
           }else {
      ?>
      <a href="logout.php">logout</a>
      
      <?php
           }
      ?>


   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>


</body>
</html>