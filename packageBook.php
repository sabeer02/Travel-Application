<?php

session_start();
include('config1.php');
$salt = "jcomp";
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Font-->
    <link rel="stylesheet" type="text/css" href="css/raleway-font.css">
    <link rel="stylesheet" type="text/css" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
    <!-- Jquery -->
    <link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">
    <!-- Main Style Css -->
    <link rel="stylesheet" href="css/packageBook.css" />
</head>

<body>
    <div class="page-content">
        <div class="wizard-v1-content">
            <div class="wizard-form">
                <form class="form-register" id="form-register" action="" method="post">
                    <div id="form-total">
                        <!-- SECTION 1 -->
                        <h2>
                            <span class="step-icon"><i class="zmdi zmdi-account"></i></span>
                            <span class="step-number">Step 11</span>
                            <span class="step-text">Traveller Infomation</span>
                        </h2>
                        <section>
                            <div class="inner">
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <label for="username">PASSENGER NAME*</label>
                                        <input type="text" placeholder="Username" class="form-control" id="username" name="username" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <label for="email">PASSENGER EMAIL*</label>
                                        <input type="email" placeholder="Your Email" class="form-control" id="email" name="email" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <label for="contact_number">CONTACT NUMBER*</label>
                                        <input type="number" placeholder="contact_number" class="form-control" id="contact_number" name="contact_number" pattern="[789][0-9]{9}" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <label for="people">NUMBER OF TICKETS*</label>
                                        <input type="text" placeholder="Password" class="form-control" id="people" name="people" min="0" max="4" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <label for="card-type">Package Name</label>
                                        <select name="Packgage_type" id="Packgage_type" class="form-control" required>
											<option value="" disabled selected>Select Package</option>
											<option value="MUMBAI">MUMBAI</option>
											<option value="CHENNAI">CHENNAI</option>
											<option value="KOLKATA">KOLKATA</option>
											<option value="DELHI">DELHI</option>
											<option value="AGRA">AGRA</option>
											<option value="SHILLONG">SHILLONG</option>
										</select>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- SECTION 2 -->
                        <h2>
                            <span class="step-icon"><i class="zmdi zmdi-card"></i></span>
                            <span class="step-number">Step 2</span>
                            <span class="step-text">Transport Infomation</span>
                        </h2>
                        <section>
                            <div class="inner">
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <label for="hotel_type">Hotel Type</label>
                                        <select name="hotel_type" id="hotel_type" class="form-control">
											<option value="" disabled selected>Select Hotel Type</option>
											<option value="5 STAR HOTEL">5 STAR HOTEL</option>
											<option value="4 STAR HOTEL">4 STAR HOTEL</option>
											<option value="3 STAR HOTEL">3 STAR HOTEL</option>
											<option value="NORMAL HOTEL WITH AC">NORMAL HOTEL WITH AC</option>
											<option value="NORMAL HOTEL">NORMAL HOTEL</option>
										</select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder form-holder-3">
                                        <label for="city">CITY NAME</label>
                                        <input type="text" name="city" class="card-number" id="city" placeholder="ex: Chennai">
                                    </div>
                                    <div class="form-holder">
                                        <label for="state">STATE</label>
                                        <input type="text" name="state" class="cvc" id="state" placeholder="xxx">
                                    </div>
                                </div>
                                <div class="form-row form-row-2">
                                    <div class="form-holder">
                                        <label for="food">FOOD TYPE</label>
                                        <select name="food" id="food" class="form-control">
											<option value="" disabled selected>FOOD TYPE</option>
											<option value="VEGETARIAN">VEGETARIAN</option>
											<option value="NON-VEGETARIAN">NON-VEGETARIAN</option>
										</select>
                                    </div>
                                    <div class="form-holder">
                                        <label for="status">STATUS</label>
                                        <select name="status" id="status" class="form-control" aria-readonly="true">
											<option value="PENDING">PENDING</option>
										</select>
                                    </div>
                                </div>
                                <div class="form-row form-row-2">
                                    <div class="form-holder">
                                        <label for="d_date">DEPARTURE</label>
                                        <input type="date" name="d_date" class="card-number" id="d_date">
                                    </div>
                                    <div class="form-holder">
                                        <label for="a_date">ARRIVAL</label>
                                        <input type="date" name="a_date" class="card-number" id="a_date">
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- SECTION 3 -->
                        <h2>
                            <span class="step-icon"><i class="zmdi zmdi-receipt"></i></span>
                            <span class="step-number">Step 3</span>
                            <span class="step-text">Confirm Your Details</span>
                        </h2>
                        <section>
                                <div class="inner">
                                    <h3>Comfirm Details</h3>
                                    <div class="form-row table-responsive">
                                        <table class="table">
                                            <tbody>
                                                <tr class="space-row">
                                                    <th>Passenger Name:</th>
                                                    <td id="username-val" name="username-val"></td>
                                                </tr>
                                                <tr class="space-row">
                                                    <th>Email Address:</th>
                                                    <td id="email-val" name="email-val"></td>
                                                </tr>
                                                <tr class="space-row">
                                                    <th>Contact Number:</th>
                                                    <td id="contact-val" name="contact-val"></td>
                                                </tr>
                                                <tr class="space-row">
                                                    <th>Package Name:</th>
                                                    <td id="package-val" name="package-val"></td>
                                                </tr>
                                                <tr class="space-row">
                                                    <th>people:</th>
                                                    <td id="count-val" name="count-val"></td>
                                                </tr>

                                                <tr class="space-row">
                                                    <th>Hotel Type:</th>
                                                    <td id="hotel-type-val" name="hotel-type-val"></td>
                                                </tr>
                                                <tr class="space-row">
                                                    <th>City:</th>
                                                    <td id="city-val" name="city-val"></td>
                                                </tr>
                                                <tr class="space-row">
                                                    <th>State:</th>
                                                    <td id="state-val" name="state-val"></td>
                                                </tr>
                                                <tr class="space-row">
                                                    <th>Food Type:</th>
                                                    <td id="food-val" name="food-val"></td>
                                                </tr>
                                                <tr class="space-row">
                                                    <th>Status:</th>
                                                    <td id="status-val" name="status-val"></td>
                                                </tr>
                                                <tr class="space-row">
                                                    <th>From:</th>
                                                    <td id="d-date-val" name="d-date-val"></td>
                                                </tr>
                                                <tr class="space-row">
                                                    <th>To:</th>
                                                    <td id="a-date-val" name="a-date-val"></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <input type="submit" style="background-color:#083d6e; color: #ffffff; padding: 2%;" name="confirm-btn" id="confirm-btn" value="CONFIRM">
                       
                        </section>
                    </div>
                </form>
                <?php
                            if(isset($_POST['confirm-btn'])){
                                $id_query = "SELECT name FROM user WHERE ID='{$_SESSION["user-id"]}'";
                                $user_id_result = mysqli_query($conn, $id_query);
                                $user_id = $_SESSION["user-id"];
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
        </div>
    </div>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
    <script src="js/jquery.steps.js"></script>
    <script src="js/main.js"></script>
</body>

</html>