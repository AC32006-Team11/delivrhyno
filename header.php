<?php include 'dbConnect.php'; ?>
<?php session_start(); ?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Francois+One" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <title>delivrhyno</title>
</head>

<body>
<div class="container">
    <div class="row">
        <div class="col-md-2">
            <img class="heading_image" src="assets/bw_rhino.png" alt="delivrhyno">
        </div>

        <div class="col-md-10">
            <h1 class="heading">Delivrhyno</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="index.php">Home</a>
                    </div>

                    <ul class="nav navbar-nav">
                        <li class="active"><a href="aboutUs.php">About Us</a></li>
                        <li><a href="restaurantSelection.php">Restaurants</a></li>
                        <?php
                        if (isset($_SESSION["loggedIn"]) == "loggedIn") {
                            echo '<li><a href="userAccount.php">Your Account</a></li> <li><a href="#">Your Orders</a></li>';
                        } else {
                        }
                        ?>
                    </ul>

                    <?php
                    if (isset($_SESSION["loggedIn"]) == "loggedIn") {
                        echo '<ul class="nav navbar-nav navbar-right"> <li><a href="userLogout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li> </ul>';
                    } else {
                        echo '<ul class="nav navbar-nav navbar-right"> <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Register</a></li> <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li> </ul>';
                    }
                    ?>
                </div>
            </nav>
        </div>
    </div>
    <hr>
</div>