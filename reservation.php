reservation.php
<?php 
    $err_fname=$err_lname=$err_date=$err_guest=$err_mail=$err_tel= "";
    $fname = "";
    $flag="";

    if ($_SERVER['REQUEST_METHOD']=='POST')
     {
     	if (empty($_POST['fname'])) {
     		$err_fname="***First name cannot be empty";
     		$flag=1;
     	}
    	elseif (!preg_match("/^[a-zA-Z]{3,20}$/",$_POST['fname'])) {
    		$err_fname= "***Please Enter a Valid Name";
    		$flag=1;
    	}
    	else
    		$fname=$_POST['fname'];
    	$flag=0;

    	if (empty($_POST['lname'])) {
     		$err_lname="***Last name cannot be empty";
     		$flag=1;
     	}
    	elseif (!preg_match("/^[a-zA-Z]{3,20}$/",$_POST['lname'])) {
    		$err_lname= "***Please Enter a Valid Name";
    		$flag=1;
    	}
    	else
    		$lname=$_POST['lname'];
    	$flag=0;

    	if (empty($_POST['date'])) {
     		$err_date="***Choose the date";
     		$flag=1;
     	}
    	elseif (preg_match("/^(0?[1-9]|[12][0-9]|3[01])[\/\-](0?[1-9]|1[012])[\/\-]\d{4}$/",$_POST['date'])) 

    		$date=$_POST['date'];
        $err_date="$date";
    	$flag=0;

    	if (empty($_POST['num_guests'])) {
     		$err_guest="***Please enter the number of guest";
     		$flag=1;
     	}
    	elseif (!preg_match("/^[1-9]{1,3}$/",$_POST['num_guests'])) 
    		$err_guest="***Please enter a valid number";
    	else
    		$guest=$_POST['num_guests'];
    	$flag=0;


    	if (empty($_POST['tele'])) {
     		$err_tel="***Please enter Your Mobile No";
     		$flag=1;
     	}
    	elseif (!preg_match("/^\+?[0-9]{10,12}$/",$_POST['tele'])) 
    		$err_tel="***Please enter a valid number";
    	else
    		$tele=$_POST['tele'];
    	$flag=0;


    	if (empty($_POST['user_mail'])) {
     		$err_mail="***Please enter Your Mail Id";
     		$flag=1;
     	}
    	elseif (!preg_match("/^\w+@gmail.com$/",$_POST['user_mail'])) 
    		$err_mail="***Please enter a valid mail Id";
    	else
    		$guest=$_POST['user_mail'];
    	$flag=0;
$mname=$_POST['mname'];
$time=$_POST['time'];


    }

?>