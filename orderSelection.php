<?php include 'header.php'; ?>
<?php include 'dbConnect.php'; ?>

<?php
$basketContents = array();
$basketTotal = array(); ?>

<?php

//cannot load with different menu if navigate back
if (empty($_SESSION['restaurantID'])) {
    $_SESSION['restaurantID'] = $_GET['r'];
}

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
                    <th><a href="orderSelection.php?i='.$row[0].'">Add item to basket</a></th>
                </tr>'; }

        echo '</table>
                </div>
                    <div class="col-md-6">
                    <ul>
                    <li><b>Basket Contents: </b>' ?>?></li>
                    <li><b>Basket Total: </b><?php print_r($basketTotal); ?></li>
                    <li><a href="orderBasket.php">View Basket</a></li>
                    <li><a href="orderPayment.php">Submit Order</a></li>
                    </ul>
                        </div>
                    </div>
                </div>'; ?>

<?php //code for basket

if (isset($_GET['i'])) {
    $_SESSION['itemID'] = $_GET['i'];

    $query = "SELECT * FROM `restaurant_menu_item` WHERE '$_SESSION[itemID]' = restaurant_id ORDER BY menu_item_group DESC";
    $result = mysqli_query($db, $query) or die(mysqli_error($db));

    $row = mysqli_fetch_array($result);

    array_push($basketContents, $row[3]);
    array_push($basketTotal, $row[4]);
}
?>



<?php include 'footer.php'; ?>