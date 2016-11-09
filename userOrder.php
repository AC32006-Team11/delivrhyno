<?php include 'header.php';?>

<?php
if (isset($_SESSION["loggedIn"]) == "loggedIn") { ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Your deliveries</h2>
                <table class="table table-condensed">
                    <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Restaurant</th>
                        <th>Ordered From</th>
                        <th>Ordered At</th>
                        <th>Items</th>
                        <th>Total Cost</th>
                    </tr>
                    </thead>
                <?php
                    $queryTransaction = "SELECT * FROM transaction WHERE customer_id = '$_SESSION[customerID]'";
                    $resultTransaction = mysqli_query($db, $queryTransaction) or die(mysqli_error($db));

                    $rowTransaction = mysqli_fetch_array($resultTransaction);

                    $queryAddress = "SELECT * FROM customer WHERE customer_id = $rowTransaction[1]";
                    $resultAddress = mysqli_query($db, $queryAddress) or die(mysqli_error($db));

                    $rowAddress = mysqli_fetch_array($resultAddress);

                    $queryRestaurant = "SELECT * FROM restaurant WHERE restaurant_id = '$rowTransaction[0]'";
                    $resultRestaurant = mysqli_query($db, $queryRestaurant) or die(mysqli_error($db));

                    $rowRestaurant = mysqli_fetch_array($resultRestaurant);

                    $queryPayment = "SELECT * FROM transaction_payment WHERE transaction_id = '$rowTransaction[0]'";
                    $resultPayment = mysqli_query($db, $queryPayment) or die(mysqli_error($db));

                    $rowPayment = mysqli_fetch_array($resultPayment);

                    $_SESSION['orderItems'] = $rowTransaction[5];
                    $_SESSION['orderCost'] = $rowPayment[2];
                    $_SESSION['orderedFrom'] = $rowRestaurant[1];
                    $_SESSION['orderedAt'] = $rowTransaction[4];
                    $_SESSION['street'] = $rowAddress[4];
                    $_SESSION['county'] = $rowAddress[5];
                    $_SESSION['city'] = $rowAddress[6];
                    $_SESSION['post_code'] = $rowAddress[7];


                    echo "<tbody><td>".$rowTransaction[0]."</td><td>$_SESSION[orderedFrom]</td><td>$_SESSION[orderedAt]</td><td>$_SESSION[orderItems]</td><td>$_SESSION[orderCost]</td><td>$_SESSION[street], $_SESSION[county], $_SESSION[city], $_SESSION[post_code]</td>";
                    echo "</tbody></table>";
                ?>

            </div>
        </div>
    </div>

<?php } else {
    echo '<h2>No User Found</h2>';
} ?>

<?php include 'footer.php';?>