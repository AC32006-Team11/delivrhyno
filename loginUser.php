<?php
session_start();
include('dbConnect.php');

if (isset($_POST['username']) and isset($_POST['password'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM `customer` WHERE username='$username' and password='$password'";

    $result = mysqli_query($db, $query) or die(mysqli_error($db));
    $count = mysqli_num_rows($result);

    if ($count == 1){
        $_SESSION['username'] = $username;
    }else{

        $fmsg = "Invalid Login Credentials.";
    }
}
?>