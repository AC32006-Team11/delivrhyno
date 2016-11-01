<?php include 'header.php'; ?>

<?php
include('dbConnect.php');

if (isset($_POST['username']) and isset($_POST['password'])) {

    $username = $_POST['username'];
    $passwordInsecure = $_POST["password"];
    $password = sha1($passwordInsecure);

    $query = "SELECT * FROM `customer` WHERE username = '$username' and password='$password'";
    $result = mysqli_query($db, $query) or die(mysqli_error($db));

    $row = mysqli_fetch_array($result);

    $count = mysqli_num_rows($result);
    if ($count == 1) {
        $_SESSION['loggedIn'] = "loggedIn";
        $_SESSION['username'] = $username;
        $_SESSION['title'] = $row[1];
        $_SESSION['forename'] = $row[2];
        $_SESSION['surname'] = $row[3];
        $_SESSION['street'] = $row[4];
        $_SESSION['county'] = $row[5];
        $_SESSION['city'] = $row[6];
        $_SESSION['post_code'] = $row[7];
        $_SESSION['contact_phone_region'] = $row[8];
        $_SESSION['contact_phone'] = $row[9];
        $_SESSION['contact_email'] = $row[10];

        echo "Valid Login Credentials.";
    }
} else {
    echo "Invalid Login Credentials.";
}
?>

<?php include 'footer.php'; ?>