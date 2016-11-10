<?php include 'header.php';?>

<?php
if (isset($_SESSION["loggedIn"]) == "loggedIn") { ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Your Orders</h2>
                <table class="table table-condensed">

                    <?php

                    echo "<thead><tr><th>Order ID</th><th>Ordered At</th><th>Items</th><th>Delivery Address</th></tr></thead>";

                    $queryTransaction = "SELECT * FROM transactionview WHERE customer_id = '$_SESSION[customerID]'";
                    $resultTransaction = mysqli_query($db, $queryTransaction) or die(mysqli_error($db));

                    $queryAddress = "SELECT * FROM customerview WHERE customer_id = '$_SESSION[customerID]'";
                    $resultAddress = mysqli_query($db, $queryAddress) or die(mysqli_error($db));

                    $rowAddress = mysqli_fetch_array($resultAddress);

                    while($row = mysqli_fetch_array($resultTransaction)) {

                            echo "<tr><td>" . $row["0"] . "</td>";
                            echo "<td>" . $row["4"] . "</td>";
                            echo "<td>" . $row["5"] . "</td>";
                            echo "<td>" . $rowAddress["4"] . " " . $rowAddress["5"] . " " . $rowAddress["6"] . " " . $rowAddress["7"] . "</td>";
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
