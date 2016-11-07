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
                document.getElementById("total_items").value = response;
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
                <div class="row">
                   <div class = "col-md-3">
                    <img src="assets\basket.png">
                    <input type="hidden" id="item_name_'.$row[0].'" value="'.$row[3].'">
                    <input type="hidden" id="item_price_'.$row[0].'" value="'.$row[4].'">
                   </div>
                   <div class = "col-md-3">
                    <p>' . $row[3] . '</p>
                   </div>
                   <div class = "col-md-3">
                    <p>' . $row[4] . '</p>
                   </div>
                   <div class = "col-md-3">
                    <input type="button" value="Add To CART" onclick="cart('.$row[0].')">
                   </div>
               </div>
              </div>';}
    echo '</div>';}
echo ' </div>'?>

<?php include 'footer.php'; ?>

