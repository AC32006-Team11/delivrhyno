<?php include 'header.php'; ?>

<?php function updateEmployee(){

    include 'dbConnect.php';

    $employeeID = $_POST["employeeID"];
    $salary = $_POST["salary"];
    $endEmploy = $_POST["endEmploy"];

    if (!empty($salary)) {
        $query = "UPDATE `payroll` SET salary = '$salary' WHERE employee_id = '$employeeID'";
        $result = mysqli_query($db, $query) or die(mysqli_error($db));
    }

    if (!empty($endEmploy)) {
        $query = "UPDATE `payroll` SET end_of_employment = '$endEmploy' WHERE employee_id = '$employeeID'";
        $result = mysqli_query($db, $query) or die(mysqli_error($db));
    }
}

function newEmployee(){
    include 'dbConnect.php';

    $employeeID = $_POST["employeeID"];
    $salary = $_POST["salary"];
    $startEmploy = $_POST["startEmploy"];

    $query = "INSERT INTO payroll(employee_id, salary, start_of_employment) VALUES('$employeeID','$salary','$startEmploy')";
    $result = mysqli_query($db, $query) or die(mysqli_error($db));
}

if (isset($_POST["update_employee"])) {
    updateEmployee();

    echo
    '<div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Updated employee payroll details</h1>
                </div>
            </div>
        </div>';
} else if(isset($_POST["new_employee"])) {
    newEmployee();

    echo
    '<div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Added employee payroll details</h1>
                </div>
            </div>
        </div>';
} ?>

<?php include 'footer.php'; ?>
