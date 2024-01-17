<?php
    session_start();
    include('config1.php');
    $salt = "jcomp";
?>
<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="test.css">
    </head>
    <body>
        <div class="package-booking">
            <div>
                
            </div>
        </div>
    </body>
    <?php
    $insert_package = "INSERT INTO package
    (p_user_id,p_name,p_email,contact_number,p_number,package_name,hotel_type,city,p_state,foodtype,p_status) VALUES
    ('1','sabeer','sabeer@gmail','8608403720','4','goa','5star','chennai','tamilnadu','veg','pending')";
$result_package = mysqli_query($conn , $insert_package);
if(!$result_package){
    echo (mysqli_error($conn));
}
    ?>
</html>
