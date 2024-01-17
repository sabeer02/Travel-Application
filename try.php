<?php
session_start();
if (!isset($_SESSION["user-id"])) {
    header("Location: signlog.php");
}
include 'config1.php';
$salt = "jcomp";
?>

<html>
    <body>
        <?php
             $name_query = "SELECT name FROM user WHERE ID='{$_SESSION["user-id"]}'";
             $name = mysqli_query($conn, $name_query);
             $name_result = $name->fetch_array()['name'] ?? '';
            // echo  $name_result ;

             $insert_query = "INSERT INTO qoute  
             (name, place, count_p , from_date , to_date ) VALUES 
             ('$name_result','tamilnadu','1','22-04-22','23-04-22')";
              $result = mysqli_query($conn , $insert_query);
              if(!$result){ 
                echo("Error description: " . $conn -> error);
            
			} 

        ?>

    </body>
</html>