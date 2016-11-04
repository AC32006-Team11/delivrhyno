<?php include 'header.php'; ?>

<?php

function updateMenu() {

    include 'dbConnect.php';

    $restaurantID = $_POST["restaurantID"];
    $menu_item_group = $_POST["menu_item_group"];
    $menu_item_name = $_POST["menu_item_name"];
    $menu_item_price = $_POST["menu_item_price"];

    $query = "INSERT INTO restaurant_menu_item(restaurant_id, menu_item_group, menu_item_name, menu_item_price) VALUES ('$restaurantID', '$menu_item_group', '$menu_item_name', '$menu_item_price')";

    $result = mysqli_query($db, $query) or die(mysqli_error($db));

    echo '<h1>Item Added</h1>';
}

if (isset($_POST["register"])) {
    updateMenu();
}
?>


<?php include 'footer.php'; ?>
