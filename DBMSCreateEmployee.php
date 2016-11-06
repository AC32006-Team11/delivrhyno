<?php include 'header.php'; ?>

<?php

function checkUserExists() {
    include 'dbConnect.php';

    $query = "SELECT * FROM `employee` WHERE '$_POST[username]' = username";
    $result = mysqli_query($db, $query) or die(mysqli_error($db));

    $count = mysqli_num_rows($result);
    if ($count == 1) {
        echo '<h3>A user with that username exists</h3>';
    } else {
        registerEmployee();
    }

}
function registerEmployee() {

    include 'dbConnect.php';

    $branchID = $_POST["branchID"];
    $role = $_POST["role"];
    $username = $_POST["username"];
    $passwordInsecure = $_POST["password"];
    $password = sha1($passwordInsecure);
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


    $query = "INSERT INTO employee(branch_id, role, title, forename, surname, street, county, city, post_code, contact_phone_region, contact_phone, contact_email, holiday_entitlement, username, password) VALUES ('$branchID', '$role','$title','$forename','$surname','$street','$county','$city','$post_code','$contact_phone_region','$contact_phone','$contact_email','$holiday_entitlement','$username','$password')";

    $result = mysqli_query($db, $query) or die(mysqli_error($db));

    echo '<h1>Employee Created</h1>';
}

if (isset($_POST["create_employee"])) {
    checkUserExists();
}
?>


<?php include 'footer.php'; ?>
