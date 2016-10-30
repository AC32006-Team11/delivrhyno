<?php include 'header.php'; ?>

<?php
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
}

if (isset($_POST["register"])) {
    registerUser();

    echo '<h1>Thanks for registering!</h1>';
}
?>


<?php include 'footer.php'; ?>
