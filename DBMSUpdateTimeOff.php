<?php include 'header.php'; ?>

<?php function newTimeOff(){

    include 'dbConnect.php';

    $employeeID = $_POST["employeeID"];
    $leaveCategory = $_POST["leaveCategory"];
    $startTime = $_POST["startLeave"];
    $endTime = $_POST["endLeave"];
    $leaveDesc = $_POST["leaveDesc"];

    if (!empty($employeeID)) {
        $query = "INSERT INTO `time_off`(employee_id, leave_category, start_of_leave, end_of_leave, leave_description) VALUES ('$employeeID', '$leaveCategory', '$startTime', '$endTime', '$leaveDesc')";
        $result = mysqli_query($db, $query) or die(mysqli_error($db));
    }
}

if (isset($_POST["newTimeOff"])) {
    newTimeOff();

    echo
    '<div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Updated employee timeoff details</h1>
                </div>
            </div>
        </div>';
} ?>

<?php include 'footer.php'; ?>
