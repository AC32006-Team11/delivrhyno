<?php include 'header.php'; ?>

<?php

function registerRestaurant() {

    include 'dbConnect.php';

    $restaurant_name = $_POST["restaurant_name"];
    $restaurant_description = $_POST["restaurant_description"];
    $street = $_POST["street"];
    $county = $_POST["county"];
    $city = $_POST["city"];
    $post_code = $_POST["post_code"];
    $contact_phone_region = $_POST["contact_phone_region"];
    $contact_phone = $_POST["contact_phone"];
    $delivery_time = $_POST["delivery_time"];

    $query = "INSERT INTO restaurant(restaurant_name, restaurant_description, street, county, city, post_code, contact_phone_region, contact_phone, delivery_time) VALUES ('$restaurant_name', '$restaurant_description', '$street', '$county', '$city', '$post_code', '$contact_phone_region', '$contact_phone', '$delivery_time')";

    $result = mysqli_query($db, $query) or die(mysqli_error($db));

    echo '<h1>Restaurant Registered</h1>';
}

if (isset($_POST["register"])) {
    registerRestaurant();
}
?>


<?php include 'footer.php'; ?>
