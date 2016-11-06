<?php include 'header.php'; ?>
<?php include 'dbConnect.php'; ?>

<?php

$basketItemNameArray = array();

if (isset($_GET['r'])) {
    $_SESSION['restaurantID'] = $_GET['r'];

    $query = "SELECT * FROM `restaurant_menu_item` WHERE '$_SESSION[restaurantID]' = restaurant_id ORDER BY menu_item_group DESC";
    $result = mysqli_query($db, $query) or die(mysqli_error($db));

    echo '<div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3>Restaurant Menu</h3>';

    while ($row = mysqli_fetch_array($result)) {
        echo '<table class="table">
                <tr>
                    <th>' . $row[3] . '</th>
                    <th>' . $row[2] . '</th>
                    <th>' . $row[4] . '</th>
                    <th><a href="">Add item to basket</a></th>
                </tr>'; }

        echo '</table>
                </div>
                    <div class="col-md-6">
                        <a href="orderPayment.php">Submit Order</a>
                    </div>
                    </div>
                </div>'; } ?>

<?php //code for basket

?>



<?php include 'footer.php'; ?>