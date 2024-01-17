<?php
include('config1.php');

$salt = "jcomp";
?>
<!DOCTYPE html>
<html lang="en">
<head>


<!------------------------------------->
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>
   
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        $( document ).ready(function() {
            $('#view_packages').load("viewPackages.php");
        });
        function loadBooking(){
            var divy = document.getElementById("Book_packages");
            divy.style.display = "block";
                 $('#display_book').load("packageBook.php");

        }
        
    </script>
    <!-- Font-->
    <link rel="stylesheet" type="text/css" href="css/raleway-font.css">
    <link rel="stylesheet" type="text/css" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
    <!-- Jquery -->
    <link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">
   <!-- swiper css link  -->

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->
<?php
include('header.php');
?>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

<div class="content">
    <h3>travel is the only</h3>
    <p>thing you <span class="orange">buy</span> that makes you <span class="orange"> richer</span> </p>
</div>

<div class="controls">
    <span class="vid-btn active" data-src="images/vid-1.mp4"></span>
    <span class="vid-btn" data-src="images/vid-2.mp4"></span>
    <span class="vid-btn" data-src="images/vid-3.mp4"></span>
    <span class="vid-btn" data-src="images/vid-4.mp4"></span>
    <span class="vid-btn" data-src="images/vid-5.mp4"></span>
</div>

<div class="video-container">
    <video src="images/vid-1.mp4" id="video-slider" loop autoplay muted></video>
</div>

</section>

<!-- home section ends -->

<!-- book section starts  -->

<section class="book" id="book">

<h1 class="heading">
    <span>g</span>
    <span>e</span>
    <span>t</span>
    <span class="space"></span>
    <span>p</span>
    <span>l</span>
    <span>a</span>
    <span>n</span>
</h1>

<div class="row">

    <div class="image">
        <img src="images/Planning schedule.png" alt="">
    </div>

    <div>
        <form action="" method="post">
            <div class="inputBox">

                <div class="">
                    <h3>to</h3>
                    <select class="select" name="destination"  required>CHOOSE...
                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                        <option value="Assam">Assam</option>
                        <option value="Bihar">Bihar</option>
                        <option value="Goa">Goa</option>
                        <option value="gujarat">gujarat</option>
                        <option value="Haryana">Haryana</option>
                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                        <option value="Karnataka">Karnataka</option>
                        <option value="Jharkhand">Jharkhand</option>
                        <option value="Kerala">Kerala</option>
                        <option value="Madhya Pradesh">Madhya Pradesh</option>
                        <option value="Maharashtra ">Maharashtra</option>
                        <option value="Manipur">Manipur</option>
                        <option value="Meghalaya ">Meghalaya</option>
                        <option value="Mizoram ">Mizoram</option>
                        <option value="Nagaland ">Nagaland</option>
                        <option value="Odisha">Odisha</option>
                        <option value="Punjab ">Punjab</option>
                        <option value="Sikkim ">Sikkim</option>
                        <option value="Tamil Nadu ">Tamil Nadu</option>
                        <option value="Uttarakhand ">Uttarakhand</option>
                        <option value="West Bengal ">West Bengal</option>
                    </select>
                </div>

            </div>
            <div class="inputBox">
                <h3>how many</h3>
                <input type="number" placeholder="number of guests" name="count" id="count" required>
            </div>
            <div class="inputBox">
                <h3>arrivals</h3>
                <input type="date" name="from" id="from" required>
            </div>
            <div class="inputBox">
                <h3>leaving</h3>
                <input type="date" name="to" id="to" required>
            </div>
            <?php
            if (!isset($_SESSION["user-id"])) { 
             ?>
            <input type="submit" class="btn"   value="Get free quotes" style="pointer-events:none;">
            <?php
                 }else {
            ?>
            <input type="submit" class="btn" name="quote" id="quote" value="Get free quotes" >
            <?php
                    }
            ?>
            <?php
            if(isset($_POST['quote'])){

                $name_query = "SELECT name FROM user WHERE ID='{$_SESSION["user-id"]}'";
                $name = mysqli_query($conn, $name_query);
                $name_result = $name->fetch_array()['name'] ?? '';
                $place = $_POST['destination'];
                $count = $_POST['count'];
                $from = $_POST['from'];
                $to = $_POST['to'];

                $insert_query = "INSERT INTO qoute  
             (name, place, count_p , from_date , to_date ) VALUES 
                ('$name_result','$place','$count','$from','$to')";

            $result = mysqli_query($conn , $insert_query);
        }
    ?>
        </form>
    </div>
    


</div>

</section>

<!-- book section ends -->

<!-- packages section starts  -->

<section class="packages" id="packages">

<h1 class="heading">
    <span>p</span>
    <span>a</span>
    <span>c</span>
    <span>k</span>
    <span>a</span>
    <span>g</span>
    <span>e</span>
    <span>s</span>
</h1>

<div id="package_booking">
<div class="box-container">

<div class="box">
    <img src="images/p-1.jpg" alt="">
    <div class="content">
        <h3> <i class="fas fa-map-marker-alt"></i> mumbai </h3>
        <p>Meals , Accommodation , Transfer , Sightseeing</p>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
        </div>
        <div class="price"> ₹ 7000.00 <span>₹9000.00</span> </div>
        <?php
        if (!isset($_SESSION["user-id"])) { 
         ?>
         <a href="#" style="pointer-events:none;" class="btn">book now</a>
        <?php
             }else {
        ?>
        <input type="button" class="btn" onclick="loadBooking()" value="book now">
        <?php
                }
        ?>
    </div>
</div>

<div class="box">
    <img src="images/chennai.jpg" alt="">
    <div class="content">
        <h3> <i class="fas fa-map-marker-alt"></i> chennai </h3>
        <p>Meals , Accommodation , Transfer , Sightseeing</p>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
        </div>
        <div class="price"> ₹ 6500.00 <span>₹8000.00</span> </div>
        <?php
        if (!isset($_SESSION["user-id"])) { 
         ?>
         <a href="#" style="pointer-events:none;" class="btn">book now</a>
        <?php
             }else {
        ?>
        <input type="button" class="btn" onclick="loadBooking()" value="book now">
        <?php
                }
        ?>
    </div>
</div>

<div class="box">
    <img src="images/kolkata.jpg" alt="">
    <div class="content">
        <h3> <i class="fas fa-map-marker-alt"></i> Kolkata </h3>
        <p>Meals , Accommodation , Transfer , Sightseeing</p>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
        </div>
        <div class="price"> ₹ 6000.00 <span>₹7000.00</span> </div>
        <?php
        if (!isset($_SESSION["user-id"])) { 
         ?>
         <a href="#" style="pointer-events:none;" class="btn">book now</a>
        <?php
             }else {
        ?>
        <input type="button" class="btn" onclick="loadBooking()" value="book now">
        <?php
                }
        ?>
    </div>
</div>

<div class="box">
    <img src="images/delhi.jpg" alt="">
    <div class="content">
        <h3> <i class="fas fa-map-marker-alt"></i> DELHI </h3>
        <p> Meals , Accommodation , Transfer , Sightseeing </p>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
        </div>
        <div class="price"> ₹ 10000.00 <span>₹ 11000.00</span> </div>
        <?php
        if (!isset($_SESSION["user-id"])) { 
         ?>
         <a href="#" style="pointer-events:none;" class="btn">book now</a>
        <?php
             }else {
        ?>
        <input type="button" class="btn" onclick="loadBooking()" value="book now">
        <?php
                }
        ?>
    </div>
</div>

<div class="box">
    <img src="images/taj-mahal.jpg" alt="">
    <div class="content">
        <h3> <i class="fas fa-map-marker-alt"></i> AGRA </h3>
        <p>Meals , Accommodation , Transfer , Sightseeing</p>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
        </div>
        <div class="price"> ₹ 6000.00 <span>₹ 8000.00</span> </div>
        <?php
        if (!isset($_SESSION["user-id"])) { 
         ?>
         <a href="#" style="pointer-events:none;" class="btn">book now</a>
        <?php
             }else {
        ?>
        <input type="button" class="btn" onclick="loadBooking()" value="book now">
        <?php
                }
        ?>
    </div>
</div>

<div class="box">
    <img src="images/Shilong.jpg" alt="">
    <div class="content">
        <h3> <i class="fas fa-map-marker-alt"></i> Shillong & Kaziranga </h3>
        <p>Meals , Accommodation , Transfer , Sightseeing</p>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
        </div>
        <div class="price"> ₹ 8000.00 <span>₹ 9000.00</span> </div>
        <?php
        if (!isset($_SESSION["user-id"])) { 
         ?>
         <a href="#" style="pointer-events:none;" class="btn">book now</a>
        <?php
             }else {
        ?>
        <input type="button" class="btn" onclick="loadBooking()" value="book now">
        <?php
                }
        ?>
    </div>
</div>

<div class="box">
    <img src="images/Shilong.jpg" alt="">
    <div class="content">
        <h3> <i class="fas fa-map-marker-alt"></i> Shillong & Kaziranga </h3>
        <p>Meals , Accommodation , Transfer , Sightseeing</p>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
        </div>
        <div class="price"> ₹ 8000.00 <span>₹ 9000.00</span> </div>
        <?php
        if (!isset($_SESSION["user-id"])) { 
         ?>
         <a href="#" style="pointer-events:none;" class="btn">book now</a>
        <?php
             }else {
        ?>
        <input type="button" class="btn" onclick="loadBooking()" value="book now">
        <?php
                }
        ?>
    </div>
</div>

<div class="box">
    <img src="images/Shilong.jpg" alt="">
    <div class="content">
        <h3> <i class="fas fa-map-marker-alt"></i> Shillong & Kaziranga </h3>
        <p>Meals , Accommodation , Transfer , Sightseeing</p>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
        </div>
        <div class="price"> ₹ 8000.00 <span>₹ 9000.00</span> </div>
        <?php
        if (!isset($_SESSION["user-id"])) { 
         ?>
         <a href="#" style="pointer-events:none;" class="btn">book now</a>
        <?php
             }else {
        ?>
        <input type="button" class="btn" onclick="loadBooking()" value="book now">
        <?php
                }
        ?>
    </div>
</div>

</div>
</div>



</section>

<!-- packages section ends -->
<section class="" id="Book_packages" style="display: none;">

<h1 class="heading">
    <span>b</span>
    <span>o</span>
    <span>0</span>
    <span>k</span>
    <span>p</span>
    <span>a</span>
    <span>c</span>
    <span>k</span>
    <span>a</span>
    <span>g</span>
    <span>e</span>
    <span>s</span>
</h1>

<div class="display_book" id="display_book">
                        <?php
                            if(isset($_POST['confirm-btn'])){
                                $id_query = "SELECT name FROM user WHERE ID='{$_SESSION["user-id"]}'";
                                $user_id_result = mysqli_query($conn, $id_query);
                                $user_id =  $_SESSION["user-id"];
                                //$user_id_result->fetch_array()['name'] ?? '';

                                    $name = $_POST['username'];
                                    $email = $_POST['email'];
                                    $contact_number = $_POST['contact_number'];
                                    $number = $_POST['people'];
                                    $package_name = $_POST['Packgage_type'];
                                    $hotel_type = $_POST['hotel_type'];
                                    $city = $_POST['city'];
                                    $state = $_POST['state'];
                                    $food_type = $_POST['food'];
                                    $status = $_POST['status'];
                                    $from = $_POST['d_date'];
                                    $to = $_POST['a_date'];

                                    $insert_package = "INSERT INTO package
                                            (p_user_id ,p_name ,p_email ,contact_number ,p_number ,package_name ,hotel_type ,city ,p_state ,foodtype ,p_status,d_date,a_date) VALUES
                                            ('$user_id','$name','$email','$contact_number','$number','$package_name','$hotel_type','$city','$state','$food_type','$status','$from','$to')";
                                    $result_package = mysqli_query($conn , $insert_package);
                                    if(!$result_package){
                                     echo $mysqli -> error;
                                     }
                            }
                        ?>      
</div>

</section>
<?php
            if (isset($_SESSION["user-id"])) { 
?>
<section class="" id="packages_booked">

<h1 class="heading">
    
    <span>p</span>
    <span>a</span>
    <span>c</span>
    <span>k</span>
    <span>a</span>
    <span>g</span>
    <span>e</span>
    <span>s</span>
    <span>b</span>
    <span>o</span>
    <span>o</span>
    <span>k</span>
    <span>e</span>
    <span>d</span>
</h1>


<div id="view_packages">

</div>
<?php }
?>
</section>

<!-- gallery section starts  -->

<section class="gallery" id="gallery">

<h1 class="heading">
    <span>g</span>
    <span>a</span>
    <span>l</span>
    <span>l</span>
    <span>e</span>
    <span>r</span>
    <span>y</span>
</h1>

<div class="box-container">

    <div class="box">
        <img src="images/allephe.jpg" alt="">
        <div class="content">
            <h3>Alleppey</h3>
            <p>The best time to visit Alleppey is during the winter season between the months of November to February.</p>
            
        </div>
    </div>
    <div class="box">
        <img src="images/goa.jpg" alt="">
        <div class="content">
            <h3>goa</h3>
            <p>The best time to visit Goa is in November and between February to May when temperatures are between 20°C to 33°C</p>
            
        </div>
    </div>
    <div class="box">
        <img src="images/ladakh.jpg" alt="">
        <div class="content">
            <h3>ladakh</h3>
            <p>The Best time to visit Ladakh is during the summer season from the month of April to July during this time temperature is between 15 to 30 Degree Celsius</p>
            
        </div>
    </div>
    <div class="box">
        <img src="images/rajasthan.jpg" alt="">
        <div class="content">
            <h3>rajasthan</h3>
            <p>The best time to visit Rajasthan is October to March as days are sunny, not too humid, with cooler nights</p>
            
        </div>
    </div>
    <div class="box">
        <img src="images/ooty.jpg" alt="">
        <div class="content">
            <h3>ooty</h3>
            <p>Ooty is a year-round destination, but the ideal time to visit is between the months of April to June and September to November</p>
            
        </div>
    </div>
    <div class="box">
        <img src="images/andaman.jpeg" alt="">
        <div class="content">
            <h3>andaman</h3>
            <p>The best time to visit Andaman & Nicobar Islands is considered between October and May</p>
            
        </div>
    </div>
    <div class="box">
        <img src="images/Darjeeling.jpg" alt="">
        <div class="content">
            <h3>Darjeeling</h3>
            <p>The best time to visit summer months from April to June are the ideal time to travel to Darjeeling</p>
            
        </div>
    </div>
    <div class="box">
        <img src="images/pondicherry.jpg" alt="">
        <div class="content">
            <h3>pondicherry</h3>
            <p>The time between October and March is known to be the best time to visit Pondicherry city</p>
            
        </div>
    </div>
    <div class="box">
        <img src="images/mussoorie.jpg" alt="">
        <div class="content">
            <h3>Mussoorie</h3>
            <p>The best time to visit Mussoorie is during summers, as it offers an excellent respite from the scorching summer heat</p>
            
        </div>
    </div>
    <div class="box">
        <img src="images/mussoorie.jpg" alt="">
        <div class="content">
            <h3>Mussoorie</h3>
            <p>The best time to visit Mussoorie is during summers, as it offers an excellent respite from the scorching summer heat</p>
            
        </div>
    </div>
    <div class="box">
        <img src="images/mussoorie.jpg" alt="">
        <div class="content">
            <h3>Mussoorie</h3>
            <p>The best time to visit Mussoorie is during summers, as it offers an excellent respite from the scorching summer heat</p>
            
        </div>
    </div>
    <div class="box">
        <img src="images/mussoorie.jpg" alt="">
        <div class="content">
            <h3>Mussoorie</h3>
            <p>The best time to visit Mussoorie is during summers, as it offers an excellent respite from the scorching summer heat</p>
            
        </div>
    </div>
</div>

</section>

<!-- gallery section ends -->

<!-- review section starts  -->

<section class="review" id="review">

<h1 class="heading">
    <span>r</span>
    <span>e</span>
    <span>v</span>
    <span>i</span>
    <span>e</span>
    <span>w</span>
</h1>

<div class="swiper-container review-slider">

    <div class="swiper-wrapper">

        <div class="swiper-slide">
            <div class="box">
                <img src="images/pic1.png" alt="">
                <h3>swastika</h3>
                <p>The hotel booking was as promised, and I would definitely book through TRAVEL INDIA again.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="box">
                <img src="images/pic2.png" alt="">
                <h3>kosh</h3>
                <p>Overall our first experience with TRAVEL INDIA was a memorable one.Not even once did we encounter any kind of trouble.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="box">
                <img src="images/pic3.png" alt="">
                <h3>ankita.kashyap</h3>
                <p>I am a very loyal customer of TRAVEL INDIA, I have done at least 100 tickets with this online travel portal………… and No complaints.
                </p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="box">
                <img src="images/pic4.png" alt="">
                <h3>Rahul0025</h3>
                <p>Really, Very beneficial ! TRAVEL INDIA is one of the leading online travel services provider. I will always prefer this website to book tickets.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>
        </div>

    </div>

</div>

</section>
<!-- home packages section ends -->

<!-- home offer section starts  -->



<!-- home offer section ends -->

















<!-- footer section starts  -->


<?php
include('footer.php');
?>
<!-- footer section ends -->









<!-- custom js file link  -->
<script src="js/script.js"></script>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<script src="js/jquery.steps.js"></script>
<script src="js/main.js"></script>
</body>
</html>