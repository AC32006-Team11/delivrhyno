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

    function cart(id) {
        var ele = document.getElementById(id);
        var name = document.getElementById("item_name").value;
        var price = document.getElementById("item_price").value;

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
if (empty($_SESSION['restaurantID']) or !empty($_SESSION['restaurantID'])) {
    $_SESSION['restaurantID'] = $_GET['r'];
}

$query = "SELECT * FROM `restaurant_menu_item` WHERE '$_SESSION[restaurantID]' = restaurant_id ORDER BY menu_item_group DESC";
$result = mysqli_query($db, $query) or die(mysqli_error($db));

echo '<div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h3>Restaurant Menu</h3>';

while ($row = mysqli_fetch_array($result)) {
    echo '<table class="table">
                <div class="items" id='.$row[0].'>
                <tr>
                    <th><img src="assets\basket.png"></th>
                    <th><input type="hidden" id="item_name" value='.$row[3].'>' . $row[3] . '</th>
                    <th>' . $row[2] . '</th>
                    <th><input type="hidden" id="item_price" value='.$row[4].'>' . $row[4] . '</th>
                    <th><input type="button" value="Add To CART" onclick="cart('.$row[0].')"></th>
                </tr>'; } echo '</table></div></div></div>'?>

<?php include 'footer.php'; ?>

