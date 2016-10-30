<?php include 'header.php';?>

<?php
include('dbConnect.php');

if (isset($_POST['username']) and isset($_POST['password'])){

    $username = $_POST['username'];
    $passwordInsecure = $_POST["password"];
    $password = sha1($passwordInsecure);

    $query = "SELECT * FROM `customer` WHERE username='$username' and password='$password'";

    $result = mysqli_query($db, $query) or die(mysqli_error($db));
    $count = mysqli_num_rows($result);

    if ($count == 1){
        $_SESSION['loggedIn'] = "loggedIn";
        $_SESSION['username'] = $username;
        echo "Valid Login Credentials.";
    }else{

        echo "Invalid Login Credentials.";
    }
}
?>

<?php include 'footer.php'; ?>
