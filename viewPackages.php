<?php
session_start();
include('config1.php');
        $p_booked= "select * from package  WHERE p_user_id ='{$_SESSION["user-id"]}'";
        $query=mysqli_query($conn,$p_booked);
        
$salt = "jcomp";
?>

<head>
    <meta http-equiv="Content-Type" 
        content="text/html; charset=UTF-8">
  
    <title>View List</title>
    <link rel="stylesheet" type="text/css" href="css/raleway-font.css">
    <link rel="stylesheet" type="text/css" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
    <!-- Jquery -->
    <link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">
   <!-- swiper css link  -->

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    
  
    <link rel="stylesheet" 
        href="css/viewPackages.css">
        
</head>
  
<body>
    <div class="container mt-5">
    <div class="row mt-4">
            <?php
                while ($packages=mysqli_fetch_array($query)) 
                {
            ?>
             
  
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">
                            <?php echo $packages['package_name']; ?>
                        </h3>
                        <h5 class="card-title">
                            <?php echo $packages['p_name']; ?>
                        </h5>
                        <h6 class="card-subtitle mb-2 text-muted">
                            <?php echo $packages['p_email']; ?>
                        </h6>
                        <h6 class="card-subtitle mb-2 text-muted">
                            <?php echo $packages['contact_number']; ?>
                        </h6>
                        <p> PERSONS
                            <?php
                                echo $packages['p_number'];
                            ?>
                        </p>
                        <p> FOOD TYPE
                            <?php
                                echo $packages['foodtype'];
                            ?>
                        </p>
                        <p> FROM:
                            <?php
                                echo $packages['d_date'];
                            ?>
                        </p>
                        <p> TO:
                            <?php
                                echo $packages['a_date'];
                            ?>
                        </p>

                        <?php
                             if($packages['p_status'] == 'PENDING') {
                        ?>
                            <p class="text-info">PENDING</p>
                        <?php
                            } 
                        ?>
                        
                        <a href=
                        "delete.php?id=<?php echo $packages['id']; ?>" 
                            class="card-link">
                            Delete
                        </a>
                        
                    </div>
                </div><br>
            </div>
            <?php
            }
            ?>
            
        </div>
    </div>
</body>
  
</html>