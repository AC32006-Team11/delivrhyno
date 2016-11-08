<?php include 'header.php';?>

<?php
if (isset($_SESSION["loggedIn"]) == "loggedIn") { ?>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Update your branches orders</h2>

                <?php
                $queryOrders = "SELECT * FROM `transaction_status` WHERE status = '0'";
                $resultOrders = mysqli_query($db, $queryOrders) or die(mysqli_error($db));

                $row = mysqli_fetch_array($resultOrders);
                ?>

            </div>
        </div>
    </div>

<?php } else {
    echo '<h2>ACCESS DENIED: NOT HR</h2>';
} ?>

<?php include 'footer.php';?>