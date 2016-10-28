<?php
include 'dbConnect.php';

$username = $_POST["username"];
$password = $_POST["password"];
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


$sqlCommand = "INSERT INTO customer(title, forename, surname, street, county, city, post_code, contact_phone_region, contact_phone, contact_email, username, password) VALUES ('$title', '$forename', '$surname', '$street', '$county', '$city', '$post_code', '$contact_phone_region', '$contact_phone', '$contact_email', '$username', '$password')";

$query = mysqli_query($db, $sqlCommand);

echo "$sqlCommand <br>";
echo "Successfully added to register";
?>