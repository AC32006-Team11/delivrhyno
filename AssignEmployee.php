<?php include 'header.php'; ?>

<?php function assignEmployee(){

    include 'dbConnect.php';

    $transactionID = $_POST["transactionID"];
    $employee_id = $_POST["employee_id"];

    if (!empty($transactionID)) {
        $query = "UPDATE `transaction` SET employee_id = '$employee_id' WHERE transaction_id = '$transactionID'";
        $result = mysqli_query($db, $query) or die(mysqli_error($db));
    }
}

if (isset($_POST["assign_employee"])) {
    assignEmployee();

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
