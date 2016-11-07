<?php include 'header.php'; ?>
<?php include 'dbConnect.php'; ?>

<script type="text/javascript">
    $(document).ready(function () {
        $.ajax({
            type: 'post',
            url: 'orderBasket.php',
            data: {
            total_cart_items: "totalitems"
            },
            success: function (response) {
            document.getElementById("total_items").value = response;
        }
        });
    });
    function cart(item_id) {
        var ele = document.getElementById(item_id);
        var name = document.getElementById("item_name_"+item_id).value;
        var price = document.getElementById("item_price_"+item_id).value;
        $.ajax({
            type: 'post',
            url: 'orderBasket.php',
            data: {
            item_id: ele,
                item_name: name,
                item_price: price
            },
            success: function (response) {
            document.getElementById("total_items").value = response;
        }
        });
    }
    function show_cart() {
        $.ajax({
            type: 'post',
            url: 'orderBasket.php',
            data: {
            showcart: "cart"
            },
            success: function (response) {
            document.getElementById("mycart").innerHTML = response;
            $("#mycart").slideToggle();
        }
        });
    }
</script>

<b id="cart_button" onclick="show_cart();">
    <input type="button" id="total_items" value="">
</b>

<div id="mycart">
</div>




<?php

//cannot load with different menu if navigate back
if (isset($_SESSION['restaurantID'])) {
    $_SESSION['restaurantID'] = $_GET['r'];
}


    $extraquery = "SELECT DISTINCT menu_item_group FROM `restaurant_menu_item` WHERE '$_SESSION[restaurantID]' = restaurant_id ORDER BY menu_item_group DESC";
    $extraresult = mysqli_query($db, $extraquery) or die(mysqli_error($db));
    $subcount = mysqli_num_rows($extraresult);
    echo $subcount;
    echo '<div class="container">
            <div class="col-md-12">
                <div class="thumbnail">
                    <h3>Restaurant Menu</h3>
                    <h4>Restaurant id = ' . $_SESSION['restaurantID'] . '</h4>
                </div>
            </div>
            <div class="col-md-12">';

    while($menurow = mysqli_fetch_array($extraresult)){
        echo '<div class="thumbnail">
                    <h2>' . $menurow[0] . '</h2>';
                    $query = "SELECT * FROM `restaurant_menu_item` WHERE '$_SESSION[restaurantID]' = restaurant_id AND menu_item_group ='$menurow[0]'";
                    $result = mysqli_query($db, $query) or die(mysqli_error($db));
                    while($row = mysqli_fetch_array($result)){
                    echo '<div class="thumbnail">
                        <h1>' . $row[3] . '</h1>
                        <h2>' . $row[2] . '</h2>
                        <h3>' . $row[4] . '</h3>
                        <p><a href="orderSelection.php?i=' . $row[0] . '">Add item to basket</a></p>
                    </div>';}
                echo '</div>';}
        echo ' </div>'?>
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