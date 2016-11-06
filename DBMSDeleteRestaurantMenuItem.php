<?php include 'header.php'; ?>

<?php function deleteMenuItem()
{

    include 'dbConnect.php';

    $restaurantID = $_POST["restaurantID"];
    $menuItemID = $_POST["menuItemID"];

    if (!empty($restaurantID)) {
        $query = "DELETE FROM `restaurant_menu_item` WHERE restaurant_id = '$restaurantID' AND restaurant_menu_item_id = '$menuItemID'";
        $result = mysqli_query($db, $query) or die(mysqli_error($db));
    }
}

if (isset($_POST["delete_menu_item"])) {
    deleteMenuItem();

    echo
    '<div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Deleted Menu Item</h1>
                </div>
            </div>
        </div>';
} ?>

<?php include 'footer.php'; ?>
