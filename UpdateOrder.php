<?php include 'header.php'; ?>

<?php function updateOrder()
{

    include 'dbConnect.php';

    $transactionID = $_POST["transactionID"];
    $status_desc = $_POST["status_desc"];

    if (!empty($transactionID)) {
        if ($stmt = $db->prepare("UPDATE `transaction_status` SET status_description = ? WHERE transaction_id = ?")) {
            $stmt->bind_param("ss", $status_desc, $transactionID);
            $stmt->execute();
            $stmt->close();
        }
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
