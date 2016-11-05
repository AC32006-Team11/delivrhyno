<?php include 'header.php'; ?>

<?php function deleteRestaurant()
{

    include 'dbConnect.php';

    $restaurantID = $_POST["restaurantID"];

    if (!empty($restaurantID)) {
        $query = "DELETE FROM `restaurant` WHERE restaurant_id = '$restaurantID'";
        $result = mysqli_query($db, $query) or die(mysqli_error($db));
    }

    if (!empty($restaurantID)) {
        $query = "DELETE FROM `restaurant_menu_items` WHERE restaurant_id = '$restaurantID'";
        $result = mysqli_query($db, $query) or die(mysqli_error($db));
    }

}

if (isset($_POST["delete_restaurant"])) {
    deleteRestaurant();

    echo
    '<div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Deleted restaurant</h1>
                </div>
            </div>
        </div>';
} ?>

<?php include 'footer.php'; ?>
