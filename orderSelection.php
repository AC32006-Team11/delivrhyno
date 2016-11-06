<?php include 'header.php'; ?>
<?php include 'dbConnect.php'; ?>

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
                </tr>'; } echo '</table>' ?>

<?php


    $_SESSION['itemID'] = $_GET['i'];

if (isset($_SESSION['itemID'])) {
    $query = "SELECT * FROM `restaurant_menu_item` WHERE '$_SESSION[itemID]' = restaurant_menu_item_id";
    $result = mysqli_query($db, $query) or die(mysqli_error($db));

        $row = mysqli_fetch_array($result);
        $itemName = $row[3];
        $itemPrice = $row[4];

    $query2 = "INSERT INTO `basket` (customer_id, basket_items, basket_total) VALUES ($_SESSION[customerID], $itemName, $itemPrice)";
    $result2 = mysqli_query($db, $query2) or die(mysqli_error($db));
}

?>

<?php include 'footer.php'; ?>