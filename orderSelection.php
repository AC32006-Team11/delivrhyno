<?php include 'header.php'; ?>

<script type="text/javascript">

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

    function removeCart(id) {
        var ele = document.getElementById("removecart"+id).value;

        $.ajax({
            type: 'post',
            url: 'orderBasket.php',
            data: {
                removecart: ele
            },
            success: function (response) {
                $("#mycart").slideToggle();
            }
        });
    }
</script>

<b id="cart_button" onclick="show_cart();">
    <input type="button" id="" value="Show/Hide My Basket">
</b>

<div id="mycart">
</div>

<?php
//cannot load with different menu if navigate back
if (empty($_SESSION['restaurantID']) or !empty($_SESSION['restaurantID'])) {
    $_SESSION['restaurantID'] = $_GET['r'];
}
$extraquery = "SELECT DISTINCT menu_item_group FROM `restaurantitems` WHERE '$_SESSION[restaurantID]' = restaurant_id ORDER BY menu_item_group DESC";
$extraresult = mysqli_query($db, $extraquery) or die(mysqli_error($db));
$subcount = mysqli_num_rows($extraresult);

echo '<div class="container">
            <div class="col-md-12">';
while($menurow = mysqli_fetch_array($extraresult)){
    echo '<div class="panel panel-default">
                    <div class="panel-heading"><h2>' . $menurow[0] . '</h2></div>';
    $query = "SELECT * FROM `restaurantitems` WHERE '$_SESSION[restaurantID]' = restaurant_id AND menu_item_group ='$menurow[0]'";
    $result = mysqli_query($db, $query) or die(mysqli_error($db));
    while($row = mysqli_fetch_array($result)) {
        echo '<div class="panel panel-body">
                <div class="row">
                   <div class = "col-md-3">
                    <span class="glyphicon glyphicon-shopping-cart" style="font-size: 1.75em;"></span>
                    <input type="hidden" style="vertical-align: middle; display: table-cell;"id="item_name_'.$row[0].'" value="'.$row[3].'">
                    <input type="hidden" style="vertical-align: middle; display: table-cell;"id="item_price_'.$row[0].'" value="'.$row[4].'">
                   </div>
                   <div class = "col-md-3">
                    <p>' . $row[3] . '</p>
                   </div>
                   <div class = "col-md-3">
                    <p>' . $row[4] . '</p>
                   </div>
                   <div class = "col-md-3">
                    <button type="button" class="btn btn-primary" value="Add to CART" onclick="cart('.$row[0].')">Add to Cart</button>
                   </div>
               </div>
              </div>';}
    echo '</div>';}
echo ' </div>'?>

<?php include 'footer.php'; ?>
