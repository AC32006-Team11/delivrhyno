<?php include 'header.php'; ?>

<<<<<<< HEAD
<?php
if (isset($_SESSION["loggedIn"]) == "loggedIn") { ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Your Orders</h2>
                <table class="table table-condensed">

                    <?php

                    echo "<thead><tr><th>Order ID</th><th>Ordered At</th><th>Items</th><th>Delivery Address</th></tr></thead>";

                    $queryTransaction = "SELECT * FROM transaction WHERE customer_id = '$_SESSION[customerID]'";
                    $resultTransaction = mysqli_query($db, $queryTransaction) or die(mysqli_error($db));

                    $queryAddress = "SELECT * FROM customer WHERE customer_id = '$_SESSION[customerID]'";
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
=======
    <div class="container">
        <div class="row">
            <div class="Jumbotron">
                <h2>Welcome to delivrhyno</h2>
                <p>Basket</p>
            </div>
            <br/>
            <div class="row">
                <?php
                $isdelivered = 0;
                $ordercount = 1;
                do {
                    ?>
                    <div class="col-md-4 col-md-4">
                        <div class="thumbnail"
                            <?php
                        if($ordercount<2) {
                            ?>
                            style="background-color: palegreen"
                            <?php
                        }else{}
                        ?>
                        >
                            <img src="http://placehold.it/325x150" style="padding:15px;">
                            <div class="caption">
                                <h3>
                                    Order <?php
                                    echo $ordercount;
                                    if($ordercount<2)
                                    {
                                        ?>
                                        <small>(Your Most Recent Order!)</small>
                                        <?php
                                    }else
                                    {
                                    }
                                    ?>
                                </h3>
                                <p> You ordered this meal from
                                    <?php

                                    ?>__
                                    on
                                    <?php
                                    $t = date(DATE_RSS);
                                    echo $t;
                                    ?>.
                                    What would you like to do?
                                </p>
                                <p>
                                    <a href="#" class="btn btn-primary" role="button">Review This Order</a>
                                    <a href="#" class="btn btn-default" role="button" style="float:right">
                                        <?php
                                        if ($isdelivered < 1) {
                                            echo "Cancel Order";
                                        } else {
                                            echo "Order Again";
                                        }
                                        ?></a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <?php
                    $ordercount++;
                    $isdelivered = 1;
                } while ($ordercount < 7);
                ?>
            </div>
        </div>
    </div>
>>>>>>> 89537c00bcc810808b71f74f23c72ff63ea9719e

<?php include 'footer.php'; ?>