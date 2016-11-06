<?php include 'header.php'; ?>

<?php

function checkUserExists() {
    include 'dbConnect.php';

    $query = "SELECT * FROM `customer` WHERE '$_POST[username]' = username";
    $result = mysqli_query($db, $query) or die(mysqli_error($db));

    $count = mysqli_num_rows($result);
    if ($count == 1) {
        echo '<h3>A user with that username exists</h3>';
    } else {
        registerUser();
    }

}
function registerUser() {

    include 'dbConnect.php';

    $username = $_POST["username"];
    $passwordInsecure = $_POST["password"];
    $password = sha1($passwordInsecure);
    $title = $_POST["title"];
    $forename = $_POST["forename"];
    $surname = $_POST["surname"];
    $street = $_POST["street"];
    $county = $_POST["county"];
    $city = $_POST["city"];
    $post_code = $_POST["post_code"];
    $contact_phone_region = $_POST["contact_phone_region"];
    $contact_phone = $_POST["contact_phone"];
    $contact_email = $_POST["contact_email"];


    $query = "INSERT INTO customer(title, forename, surname, street, county, city, post_code, contact_phone_region, contact_phone, contact_email, username, password) VALUES ('$title', '$forename', '$surname', '$street', '$county', '$city', '$post_code', '$contact_phone_region', '$contact_phone', '$contact_email', '$username', '$password')";

    $result = mysqli_query($db, $query) or die(mysqli_error($db));

    echo '<h1>Thanks for registering!</h1>';
}

if (isset($_POST["register"])) {
    checkUserExists();
}
?>


<?php include 'footer.php'; ?>
