<?php include 'header.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Your deliveries</h2>
            <table class="table table-condensed">
                <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Customer</th>
                        <th>Ordered From</th>
                        <th>Ordered At</th>
                        <th>Items</th>
                        <th>Total Cost</th>
                        <th>Address</th>
                    </tr>
                </thead>
<?php viewOrders();


function viewOrders()
{

    include 'dbConnect.php';

    if (isset($_SESSION["DVRLoggedIn"]) == "DVRLoggedIn") {
    $query = "SELECT * FROM `employee` WHERE (username = '$_SESSION[username]')and (role = 'HR' OR role = 'DVR')";
    $result = mysqli_query($db, $query) or die(mysqli_error($db));

    $row = mysqli_fetch_array($result);

    $count = mysqli_num_rows($result);
    if ($count == 1) {
        $_SESSION['id'] = $row[0];
        }
    }

for ($i = 0; $i < count($_SESSION['id']); $i++) {
    $queryTransaction = "SELECT * FROM transaction WHERE employee_id = '$_SESSION[id]'";
    $resultTransaction = mysqli_query($db, $queryTransaction) or die(mysqli_error($db));

    $rowTransaction = mysqli_fetch_array($resultTransaction);

    $queryAddress = "SELECT * FROM customer WHERE customer_id = $row[1]";
    $resultAddress = mysqli_query($db, $queryAddress) or die(mysqli_error($db));

    $rowAddress = mysqli_fetch_array($resultAddress);

    $queryRestaurant = "SELECT * FROM restaurant WHERE restaurant_id = '$row[2]'";
    $resultRestaurant = mysqli_query($db, $queryRestaurant) or die(mysqli_error($db));

    $rowRestaurant = mysqli_fetch_array($resultRestaurant);

    $queryPayment = "SELECT * FROM transaction_payment WHERE transaction_id = '$row[0]'";
    $resultPayment = mysqli_query($db, $queryPayment) or die(mysqli_error($db));

    $rowPayment = mysqli_fetch_array($resultPayment);

    $_SESSION['orderCost'] = $rowPayment[0];
    $_SESSION['orderedFrom'] = $rowRestaurant[1];
    $_SESSION['orderedAt'] = $rowTransaction[4];
    $_SESSION['forename'] = $rowAddress[2];
    $_SESSION['surname'] = $rowAddress[3];
    $_SESSION['street'] = $rowAddress[4];
    $_SESSION['county'] = $rowAddress[5];
    $_SESSION['city'] = $rowAddress[6];
    $_SESSION['post_code'] = $rowAddress[7];


    echo "<tbody><td>".$row[0]."</td><td>".$_SESSION['forename']." ".$_SESSION['surname']."</td><td>$_SESSION[orderedFrom]</td><td>$_SESSION[orderedAt]</td><td>".$row[5]."</td><td>$_SESSION[orderCost]</td><td>$_SESSION[street], $_SESSION[county], $_SESSION[city], $_SESSION[post_code]</td>";
    echo "</tbody></table>"; }
}


?>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
