<?php include 'header.php'; ?>

<?php function deleteEmployee()
{

    include 'dbConnect.php';

    $employeeID = $_POST["employeeID"];

    if (!empty($employeeID)) {
        $query = "DELETE FROM `employee` WHERE employee_id = '$employeeID'";
        $result = mysqli_query($db, $query) or die(mysqli_error($db));
    }

    if (!empty($employeeID)) {
        $query = "DELETE FROM `payroll` WHERE employee_id = '$employeeID'";
        $result = mysqli_query($db, $query) or die(mysqli_error($db));
    }

    if (!empty($employeeID)) {
        $query = "DELETE FROM `time_off` WHERE employee_id = '$employeeID'";
        $result = mysqli_query($db, $query) or die(mysqli_error($db));
    }

}

if (isset($_POST["delete_employee"])) {
    deleteEmployee();

    echo
    '<div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Deleted employee</h1>
                </div>
            </div>
        </div>';
} ?>

<?php include 'footer.php'; ?>
