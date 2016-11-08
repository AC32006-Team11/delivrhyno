<?php include 'header.php';?>

<?php
if (isset($_SESSION["loggedIn"]) == "loggedIn") { ?>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Your last 12 orders</h2>

                <?php
                    $queryOrders = "SELECT * FROM `transaction` WHERE customer_id = '$_SESSION[customerID]'";
                    $resultOrders = mysqli_query($db, $queryOrders) or die(mysqli_error($db));

                    $row = mysqli_fetch_array($resultOrders);
                ?>

            </div>
        </div>
    </div>

<?php } else {
    echo '<h2>No User Found</h2>';
} ?>

<?php include 'footer.php';?>