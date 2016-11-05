<?php include 'header.php'; ?>

<?php function updateRestaurant()
{

    include 'dbConnect.php';

    $restaurantID = $_POST["restaurantID"];
    $restaurant_name = $_POST["restaurant_name"];
    $restaurant_description = $_POST["restaurant_description"];
    $street = $_POST["street"];
    $county = $_POST["county"];
    $city = $_POST["city"];
    $post_code = $_POST["post_code"];
    $contact_phone_region = $_POST["contact_phone_region"];
    $contact_phone = $_POST["contact_phone"];
    $delivery_time = $_POST["delivery_time"];


    if (!empty($restaurant_name)) {
        $query = "UPDATE `restaurant` SET restaurant_name = '$restaurant_name' WHERE restaurant_id = '$restaurantID'";
        $result = mysqli_query($db, $query) or die(mysqli_error($db));
    }

    if (!empty($restaurant_description)) {
        $query = "UPDATE `restaurant` SET restaurant_description = '$restaurant_description' WHERE restaurant_id = '$restaurantID'";
        $result = mysqli_query($db, $query) or die(mysqli_error($db));
    }

    if (!empty($delivery_time)) {
        $query = "UPDATE `restaurant` SET delivery_time = '$delivery_time' WHERE restaurant_id = '$restaurantID'";
        $result = mysqli_query($db, $query) or die(mysqli_error($db));
    }

    if (!empty($street)) {
        $query = "UPDATE `restaurant` SET street = '$street' WHERE restaurant_id = '$restaurantID'";
        $result = mysqli_query($db, $query) or die(mysqli_error($db));
    }

    if (!empty($county)) {
        $query = "UPDATE `restaurant` SET coutny = '$county' WHERE restaurant_id = '$restaurantID'";
        $result = mysqli_query($db, $query) or die(mysqli_error($db));
    }

    if (!empty($city)) {
        $query = "UPDATE `restaurant` SET city = '$city' WHERE restaurant_id = '$restaurantID'";
        $result = mysqli_query($db, $query) or die(mysqli_error($db));
    }

    if (!empty($post_code)) {
        $query = "UPDATE `restaurant` SET post_code = '$post_code' WHERE restaurant_id = '$restaurantID'";
        $result = mysqli_query($db, $query) or die(mysqli_error($db));
    }

    if (!empty($contact_phone_region)) {
        $query = "UPDATE `restaurant` SET contact_phone_region = '$contact_phone_region' WHERE restaurant_id = '$restaurantID'";
        $result = mysqli_query($db, $query) or die(mysqli_error($db));
    }

    if (!empty($contact_phone)) {
        $query = "UPDATE `restaurant` SET contact_phone = '$contact_phone' WHERE restaurant_id = '$restaurantID'";
        $result = mysqli_query($db, $query) or die(mysqli_error($db));
    }

}

if (isset($_POST["update_restaurant"])) {
    updateRestaurant();

    echo
    '<div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Updated restaurant details</h1>
                </div>
            </div>
        </div>';
} ?>

<?php include 'footer.php'; ?>
