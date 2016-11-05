<?php include 'header.php'; ?>

<?php function updateEmployee()
{

    include 'dbConnect.php';

    $employeeID = $_POST["employeeID"];
    $branchID = $_POST["branchID"];
    $role = $_POST["role"];
    $title = $_POST["title"];
    $forename = $_POST["forename"];
    $surname = $_POST["surname"];
    $street = $_POST["street"];
    $county = $_POST["county"];
    $city = $_POST["city"];
    $post_code = $_POST["post_code"];
    $contact_phone_region = $_POST["contact_phone_region"];
    $contact_phone = $_POST["contact_phone"];
    $contact_email = $_POST["contact_email"];
    $holiday_entitlement = $_POST["holiday_entitlement"];

    if (!empty($role)) {
        $query = "UPDATE `employee` SET role = '$role' WHERE employee_id = '$employeeID'";
        $result = mysqli_query($db, $query) or die(mysqli_error($db));
    }

    if (!empty($branchID)) {
        $query = "UPDATE `employee` SET branch_id = '$branchID' WHERE employee_id = '$employeeID'";
        $result = mysqli_query($db, $query) or die(mysqli_error($db));
    }

    if (!empty($title)) {
        $query = "UPDATE `employee` SET title = '$title' WHERE employee_id = '$employeeID'";
        $result = mysqli_query($db, $query) or die(mysqli_error($db));
    }

    if (!empty($forename)) {
        $query = "UPDATE `employee` SET forename = '$forename' WHERE employee_id = '$employeeID'";
        $result = mysqli_query($db, $query) or die(mysqli_error($db));
    }

    if (!empty($surname)) {
        $query = "UPDATE `employee` SET surname = '$surname' WHERE employee_id = '$employeeID'";
        $result = mysqli_query($db, $query) or die(mysqli_error($db));
    }

    if (!empty($street)) {
        $query = "UPDATE `employee` SET street = '$street' WHERE employee_id = '$employeeID'";
        $result = mysqli_query($db, $query) or die(mysqli_error($db));
    }

    if (!empty($county)) {
        $query = "UPDATE `employee` SET coutny = '$county' WHERE employee_id = '$employeeID'";
        $result = mysqli_query($db, $query) or die(mysqli_error($db));
    }

    if (!empty($city)) {
        $query = "UPDATE `employee` SET city = '$city' WHERE employee_id = '$employeeID'";
        $result = mysqli_query($db, $query) or die(mysqli_error($db));
    }

    if (!empty($post_code)) {
        $query = "UPDATE `employee` SET post_code = '$post_code' WHERE employee_id = '$employeeID'";
        $result = mysqli_query($db, $query) or die(mysqli_error($db));
    }

    if (!empty($contact_phone_region)) {
        $query = "UPDATE `employee` SET contact_phone_region = '$contact_phone_region' WHERE employee_id = '$employeeID'";
        $result = mysqli_query($db, $query) or die(mysqli_error($db));
    }

    if (!empty($contact_phone)) {
        $query = "UPDATE `employee` SET contact_phone = '$contact_phone' WHERE employee_id = '$employeeID'";
        $result = mysqli_query($db, $query) or die(mysqli_error($db));
    }

    if (!empty($contact_email)) {
        $query = "UPDATE `employee` SET contact_email = '$contact_email' WHERE employee_id = '$employeeID'";
        $result = mysqli_query($db, $query) or die(mysqli_error($db));
    }

    if (!empty($holiday_entitlement)) {
        $query = "UPDATE `employee` SET holiday_entitlement = '$holiday_entitlement' WHERE employee_id = '$employeeID'";
        $result = mysqli_query($db, $query) or die(mysqli_error($db));
    }
}

if (isset($_POST["update_employee"])) {
    updateEmployee();

    echo
    '<div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Thanks for updating your details!</h1>
                </div>
            </div>
        </div>';
} ?>

<?php include 'footer.php'; ?>
