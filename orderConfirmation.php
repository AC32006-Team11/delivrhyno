<?php include 'header.php';?>

<?php

//remember to unset these in orderBakset?? on reload
//need to store transaction_payment at this stage and then call for DVRViewOrders
$_SESSION['paymentMethod'] = $_POST["payment"];
$_SESSION['itemsString'] = implode($_SESSION['name']);
$_SESSION['basketValue'] = array_sum($_SESSION['price']);
$_SESSION['itemCount'] = count($_SESSION['name']);
$_SESSION['dateOfOrder'] = date("Y-m-d H:i:s");

$query = "INSERT INTO `transaction`(customer_id, restaurant_id, transaction_date, transaction_items, transaction_items_quanitity) VALUES ('$_SESSION[customerID]','$_SESSION[restaurantID]','$_SESSION[dateOfOrder]','$_SESSION[itemsString]', '$_SESSION[itemCount]')";
$result = mysqli_query($db, $query) or die(mysqli_error($db));

$queryOrder = "SELECT * FROM `transaction` WHERE transaction_date = '$_SESSION[dateOfOrder]' and customer_id = '$_SESSION[customerID]'";
$resultOrder = mysqli_query($db, $queryOrder) or die(mysqli_error($db));

$row = mysqli_fetch_array($resultOrder);

$_SESSION['orderCode'] = $row[0];

$queryPayment = "INSERT INTO `transaction_payment`(transaction_id, payment_amount, payment_method) VALUES ('$_SESSION[orderCode]', '$_SESSION[basketValue]', '$_SESSION[paymentMethod]')";
$resultPayment = mysqli_query($db, $queryPayment) or die(mysqli_error($db));



?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php //add validation check here for order exists ?>
            <?php //add validation check here previous order button selected ?>
            <h2>You have completed your order!<br>
                <small>A branch employee will assign your order and it should be with you soon</small>
            </h2>
            <h3><b>Order details: </b>
                <small><?php echo "OrderID: $_SESSION[orderCode]" ?></small>
            </h3>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <br>
            <table class="table table-condensed">
                <thead>
                <tr>
                    <th>Item</th>
                    <th>Price</th>
                    <th>Total Cost</th>
                </tr>
                </thead>
                <?php if (isset($_SESSION['loggedIn'])) {
                    for ($i = 0; $i < count($_SESSION['id']); $i++) {
                        echo "<tbody><td>" . $_SESSION['name'][$i] . "</td><td>" . $_SESSION['price'][$i] . "</td>";
                    }
                    echo "<td>$_SESSION[basketValue]</td></tbody></table>";
                } ?>
        </div>
    </div>
</div>

<?php include 'footer.php';?>