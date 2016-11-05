<?php include 'header.php'; ?>

<?php function updateRestaurantMenuItem()
{

    include 'dbConnect.php';

    $restaurant_id = $_POST["restaurant_id"];
    $restaurant_menu_item_id = $_POST["restaurant_menu_item_id"];
    $menu_item_group = $_POST["menu_item_group"];
    $menu_item_name = $_POST["menu_item_name"];
    $menu_item_price = $_POST["menu_item_price"];

    if (!empty($menu_item_group)) {
        $query = "UPDATE `restaurant_menu_item` SET menu_item_group = '$menu_item_group' WHERE restaurant_menu_item_id = '$restaurant_menu_item_id' AND restaurant_id = '$restaurant_id' ";
        $result = mysqli_query($db, $query) or die(mysqli_error($db));
    }

    if (!empty($menu_item_name)) {
        $query = "UPDATE `restaurant_menu_item` SET menu_item_name = '$menu_item_name' WHERE restaurant_menu_item_id = '$restaurant_menu_item_id' AND restaurant_id = '$restaurant_id' ";
        $result = mysqli_query($db, $query) or die(mysqli_error($db));
    }

    if (!empty($menu_item_price)) {
        $query = "UPDATE `restaurant_menu_item` SET menu_item_price = '$menu_item_price' WHERE restaurant_menu_item_id = '$restaurant_menu_item_id' AND restaurant_id = '$restaurant_id' ";
        $result = mysqli_query($db, $query) or die(mysqli_error($db));
    }

}

if (isset($_POST["update_restaurant_menu_item"])) {
    updateRestaurantMenuItem();

    echo
    '<div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Updated restaurant menu details</h1>
                </div>
            </div>
        </div>';
} ?>

<?php include 'footer.php'; ?>
