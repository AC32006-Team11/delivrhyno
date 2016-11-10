<?php include 'header.php'; ?>

<?php function updateBranch()
{

    include 'dbConnect.php';

    $branchID = $_POST["branchID"];
    $street = $_POST["street"];
    $county = $_POST["county"];
    $city = $_POST["city"];
    $post_code = $_POST["post_code"];
    $contact_phone_region = $_POST["contact_phone_region"];
    $contact_phone = $_POST["contact_phone"];

    if (!empty($street)) {
        $query = "UPDATE `branch` SET street = '$street' WHERE branch_id = '$branchID'";
        $result = mysqli_query($db, $query) or die(mysqli_error($db));
    }

    if (!empty($county)) {
        $query = "UPDATE `branch` SET coutny = '$county' WHERE branch_id = '$branchID'";
        $result = mysqli_query($db, $query) or die(mysqli_error($db));
    }

    if (!empty($city)) {
        $query = "UPDATE `branch` SET city = '$city' WHERE branch_id = '$branchID'";
        $result = mysqli_query($db, $query) or die(mysqli_error($db));
    }

    if (!empty($post_code)) {
        $query = "UPDATE `branch` SET post_code = '$post_code' WHERE branch_id = '$branchID'";
        $result = mysqli_query($db, $query) or die(mysqli_error($db));
    }

    if (!empty($contact_phone_region)) {
        $query = "UPDATE `branch` SET contact_phone_region = '$contact_phone_region' WHERE branch_id = '$branchID'";
        $result = mysqli_query($db, $query) or die(mysqli_error($db));
    }

    if (!empty($contact_phone)) {
        $query = "UPDATE `branch` SET contact_phone = '$contact_phone' WHERE branch_id = '$branchID'";
        $result = mysqli_query($db, $query) or die(mysqli_error($db));
    }

}

if (isset($_POST["update_branch"])) {
    updateBranch();

    echo
    '<div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Updated branch details</h1>
                </div>
            </div>
        </div>';
} ?>

<?php include 'footer.php'; ?>
