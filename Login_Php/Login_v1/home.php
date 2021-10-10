<?php 
    session_start();
    $first_name = $_SESSION['first_name'];
    $last_name  = $_SESSION['last_name'];
    $gender     = $_SESSION['gender'];
    if($gender == 0){
        $x = "Mr.";
    }
    else{
        $x = "Ms. ";
    } 


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
    <title>Document</title>
</head>
<body>
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <h1> 
                    <?php
                        echo "Welcome ".$x." ".$first_name." " .$last_name;
                    ?>
                </h1>
                <button><a href="logout.php">Log out</a></button>
            </div>
           
        </div>
    </div>
</body>
</html>