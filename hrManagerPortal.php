<?php include 'header.php'; ?>


<?php
if (isset($_SESSION["HRLoggedIn"]) == "HRLoggedIn") { ?>

    <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Orders to be assigned</div>
                <div class="panel-body"><p>Please assign the orders to an employee to deliver</p></div>
                <table class="table table-condensed">

                    <?php
                    $queryOrders = "SELECT * FROM `transactionstatusview` WHERE status_description = '0'";
                    $resultOrders = mysqli_query($db, $queryOrders) or die(mysqli_error($db));

                    $row = mysqli_fetch_array($resultOrders);

                    echo "<thead><tr><th>Order ID</th><th>Transaction ID</th><th>Assign Employee</th><th>Update Status</th></tr></thead>";
                    while ($row = $resultOrders->fetch_assoc()) {
                        echo "<tbody>
                 <td>" . $row["status_id"] . "</td>
                 <td>" . $row["transaction_id"] . "</td>";
                 echo "<td><a href='hrAssignEmployee.php'>Assign Employee</a></td><td><a href='hrUpdateOrder.php'>Update Order</a></td>
                 </tbody>";
                    }

                    ?>
                </table>
            </div>
        </div>
    </div>

<?php } else {
    echo '<h2>ACCESS DENIED: NOT HR</h2>';
} ?>

<?php include 'footer.php'; ?>