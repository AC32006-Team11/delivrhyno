<?php include 'header.php';?>

<?php
if (isset($_SESSION["loggedIn"]) == "loggedIn") { ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Your Orders</h2>
                <table class="table table-condensed">

                    <?php

                    echo "<thead><tr><th>Order ID</th><th>Ordered From</th><th>Ordered At</th><th>Items</th><th>Total Cost</th><th>Address</th></tr></thead>";

                    $queryTransaction = "SELECT * FROM transaction WHERE customer_id = '$_SESSION[customerID]'";
                    $resultTransaction = mysqli_query($db, $queryTransaction) or die(mysqli_error($db));

                    $queryAddress = "SELECT * FROM customer WHERE customer_id = '$_SESSION[customerID]'";
                    $resultAddress = mysqli_query($db, $queryAddress) or die(mysqli_error($db));

                    $rowAddress = mysqli_fetch_array($resultAddress);

                    while ($row = mysqli_fetch_array($resultTransaction)) {
                        //$rowTransaction = mysqli_fetch_array($resultTransaction);

                        //$rowRestaurant = mysqli_fetch_array($resultRestaurant);

                        echo "<tr><td>".$row["0"]."</td>";
                        echo "<td>'Fix'</td>"; // ordered from
                        echo "<td>".$row["4"]."</td>";
                        echo "<td>".$row["5"]."</td>";
                        echo "<td>'Fix'</td>"; // total cost
                        echo "<td>".$rowAddress["4"]." ".$rowAddress["5"]." ".$rowAddress["6"]." ".$rowAddress["7"]."</td>"; // cust address
                    }
                    ?>
                    <?php echo "</tr></tbody></table>"; ?>

            </div>
        </div>
    </div>

<?php } else {
    echo '<h2>No User Found</h2>';
} ?>

<?php include 'footer.php';?>