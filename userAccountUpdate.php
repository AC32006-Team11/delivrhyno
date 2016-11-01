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


    if (isset($_POST["title"])) {
        $query = "UPDATE `customer` SET title = '$title' WHERE username = '$_SESSION[username]'";
        $result = mysqli_query($db, $query) or die(mysqli_error($db));
    }

    if (isset($_POST["forename"])) {
        $query = "UPDATE `customer` SET forename = '$forename' WHERE username = '$_SESSION[username]'";
        $result = mysqli_query($db, $query) or die(mysqli_error($db));
    }

    if (isset($_POST["surname"])) {
        $query = "UPDATE `customer` SET surname = '$surname' WHERE username = '$_SESSION[username]'";
        $result = mysqli_query($db, $query) or die(mysqli_error($db));
    }

    if (isset($_POST["street"])) {
        $query = "UPDATE `customer` SET street = '$street' WHERE username = '$_SESSION[username]'";
        $result = mysqli_query($db, $query) or die(mysqli_error($db));
    }

    if (isset($_POST["county"])) {
        $query = "UPDATE `customer` SET county = '$county' WHERE username = '$_SESSION[username]'";
        $result = mysqli_query($db, $query) or die(mysqli_error($db));
    }

    if (isset($_POST["city"])) {
        $query = "UPDATE `customer` SET city = '$city' WHERE username = '$_SESSION[username]'";
        $result = mysqli_query($db, $query) or die(mysqli_error($db));
    }

    if (isset($_POST["post_code"])) {
        $query = "UPDATE `customer` SET post_code = '$post_code' WHERE username = '$_SESSION[username]'";
        $result = mysqli_query($db, $query) or die(mysqli_error($db));
    }

    if (isset($_POST["contact_phone_region"])) {
        $query = "UPDATE `customer` SET contact_phone_region = '$contact_phone_region' WHERE username = '$_SESSION[username]'";
        $result = mysqli_query($db, $query) or die(mysqli_error($db));
    }

    if (isset($_POST["contact_phone"])) {
        $query = "UPDATE `customer` SET contact_phone = '$contact_phone' WHERE username = '$_SESSION[username]'";
        $result = mysqli_query($db, $query) or die(mysqli_error($db));
    }

    if (isset($_POST["contact_email"])) {
        $query = "UPDATE `customer` SET contact_email = '$contact_email' WHERE username = '$_SESSION[username]'";
        $result = mysqli_query($db, $query) or die(mysqli_error($db));
    }
}

if (isset($_POST["UpdateAccount"])) {
    updateUser();

    echo '<h1>Thanks for updating your details!</h1>';
}
?>

<?php include 'footer.php'; ?>
