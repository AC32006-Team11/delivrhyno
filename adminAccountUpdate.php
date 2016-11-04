<?php include 'header.php'; ?>

<?php function updateUser()
{

    include 'dbConnect.php';

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

    if (!empty($title)) {
        $query = "UPDATE `employee` SET title = '$title' WHERE username = '$_SESSION[username]' and role = '$_SESSION[role]'";
        $result = mysqli_query($db, $query) or die(mysqli_error($db));
    }

    if (!empty($forename)) {
        $query = "UPDATE `employee` SET forename = '$forename' WHERE username = '$_SESSION[username]' and role = '$_SESSION[role]'";
        $result = mysqli_query($db, $query) or die(mysqli_error($db));
    }

    if (!empty($surname)) {
        $query = "UPDATE `employee` SET surname = '$surname' WHERE username = '$_SESSION[username]' and role = '$_SESSION[role]'";
        $result = mysqli_query($db, $query) or die(mysqli_error($db));
    }

    if (!empty($street)) {
        $query = "UPDATE `employee` SET street = '$street' WHERE username = '$_SESSION[username]' and role = '$_SESSION[role]'";
        $result = mysqli_query($db, $query) or die(mysqli_error($db));
    }

    if (!empty($county)) {
        $query = "UPDATE `employee` SET county = '$county' WHERE username = '$_SESSION[username]' and role = '$_SESSION[role]'";
        $result = mysqli_query($db, $query) or die(mysqli_error($db));
    }

    if (!empty($city)) {
        $query = "UPDATE `employee` SET city = '$city' WHERE username = '$_SESSION[username]' and role = '$_SESSION[role]'";
        $result = mysqli_query($db, $query) or die(mysqli_error($db));
    }

    if (!empty($post_code)) {
        $query = "UPDATE `employee` SET post_code = '$post_code' WHERE username = '$_SESSION[username]' and role = '$_SESSION[role]'";
        $result = mysqli_query($db, $query) or die(mysqli_error($db));
    }

    if (!empty($contact_phone_region)) {
        $query = "UPDATE `employee` SET contact_phone_region = '$contact_phone_region' WHERE username = '$_SESSION[username]' and role = '$_SESSION[role]'";
        $result = mysqli_query($db, $query) or die(mysqli_error($db));
    }

    if (!empty($contact_phone)) {
        $query = "UPDATE `employee` SET contact_phone = '$contact_phone' WHERE username = '$_SESSION[username]' and role = '$_SESSION[role]'";
        $result = mysqli_query($db, $query) or die(mysqli_error($db));
    }

    if (!empty($contact_email)) {
        $query = "UPDATE `employee` SET contact_email = '$contact_email' WHERE username = '$_SESSION[username]' and role = '$_SESSION[role]'";
        $result = mysqli_query($db, $query) or die(mysqli_error($db));
    }
}

if (isset($_POST["UpdateAccount"])) {
    updateUser();

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
