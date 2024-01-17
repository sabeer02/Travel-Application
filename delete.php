<?php
    include('config1.php');
    $salt = "jcomp";
    $id = $_GET['id'];
    $q = "delete from package where id = $id ";
   $result = mysqli_query($conn,$q);  

    if(!$result){
        echo mysqli_error($conn);
    }else{
        header("Location: http://localhost/travel%20website/");
        exit();
    }

?>
