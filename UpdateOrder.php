<?php include 'header.php'; ?>

<?php function updateOrder(){

    include 'dbConnect.php';

    $transactionID = $_POST["transactionID"];
    $status_desc = $_POST["status_desc"];

    if (!empty($transactionID)) {
        $query = "UPDATE `transaction_status` SET status_description = '$status_desc' WHERE transaction_id = '$transactionID'";
        $result = mysqli_query($db, $query) or die(mysqli_error($db));
    }
}

if (isset($_POST["update_transaction"])) {
    updateOrder();

    echo
    '<div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Updated transaction details</h1>
                </div>
            </div>
        </div>';
} ?>

<?php include 'footer.php'; ?>
