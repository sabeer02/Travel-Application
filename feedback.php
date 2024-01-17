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
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form</title>

    <!-- BOOTSTRAP CDN Links -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd
/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/
ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/
JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@500&display=swap" rel="stylesheet">

    <!-- Custom CSS file -->
    <style>
        body {
    font-family: 'Roboto Slab', serif;
    background: #DAE2F8;
    /* fallback for old browsers */
    background: -webkit-linear-gradient(to right, #D6A4A4, #DAE2F8);
    /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to right, #D6A4A4, #DAE2F8);
    /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
}

.h1-tag{
    text-align: center;
    margin-top: 4%;
}
.form-content-section{
    width: 50%;
    margin-top: 3%;
    margin-left: 25%;
}
@media screen and (max-width: 600px){
    .form-content-section{
        width: 100%;
        margin-top: 10%;
        margin-left: 0;
    }
}

@media screen and (max-width: 800px){
    .form-content-section{
        width: 100%;
        margin-top: 10%;
        margin-left: 0;
    }
}

@media screen and (max-width: 600px){
    .form-group{
        margin-left: 10px;
        margin-right: 10px;
    }
    .btn-primary{
        margin-left: 10px;
    }
}
@media screen and (max-width: 800px){
    .form-group{
        margin-left: 20px;
        margin-right: 20px;
    }
    .btn-primary{
        margin-left: 20px;
    }
}
.myclass{
    border-radius: 20px;
}
    </style>

</head>

<body>

<?php
include('header.php');
?>

    <section id="form-section">
        <h1 class="h1-tag">Your Feedback Is important For Us</h1>
        <form class="form-content-section">
            <div class="form-group">
                <label for="exampleInputText">Name</label>
                <input type="text" class="form-control" 
id="exampleInputText" placeholder="Enter Your Name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" 
id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">
We'll never share your email with anyone
                    else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputText">Contact Number(Optional)
</label>
                <input type="text" class="form-control" 
id="exampleInputText">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Example textarea
</label>
                <textarea class="form-control" 
id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary myclass">
Post Comment</button>
        </form>
    </section>
   
   
   <?php
include('footer.php');
?>
</body>

</html>
---------------------------------------------------------------------------
feedbackform.css

/* Create a New CSS File */
