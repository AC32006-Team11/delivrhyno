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

    $currentusr = $_SESSION['username'];
    $currentrole = $_SESSION['role'];

    if (!empty($title)) {
        $stmt = $db->prepare("UPDATE `employee` SET title = ? WHERE username = '$_SESSION[username]' AND role = '$_SESSION[role]'");
        $stmt->bind_param('s', $title);
        $stmt->execute();
        $stmt->close();
    }


    if (!empty($forename)) {
        $stmt = $db->prepare("UPDATE `employee` SET forename = ? WHERE username = '$_SESSION[username]' AND role = '$_SESSION[role]'");
        $stmt->bind_param('s', $forename);
        $stmt->execute();
        $stmt->close();
    }

    if (!empty($surname)) {
        $stmt = $db->prepare("UPDATE `employee` SET surname = ? WHERE username = '$_SESSION[username]' AND role = '$_SESSION[role]'");
        $stmt->bind_param('s', $surname);
        $stmt->execute();
        $stmt->close();
    }

    if (!empty($street)) {
        $stmt = $db->prepare("UPDATE `employee` SET street = ? WHERE username = '$_SESSION[username]' AND role = '$_SESSION[role]'");
        $stmt->bind_param('s', $street);
        $stmt->execute();
        $stmt->close();
    }

    if (!empty($county)) {
        $stmt = $db->prepare("UPDATE `employee` SET county = ? WHERE username = '$_SESSION[username]' AND role = '$_SESSION[role]'");
        $stmt->bind_param('s', $county);
        $stmt->execute();
        $stmt->close();
    }

    if (!empty($city)) {
        $stmt = $db->prepare("UPDATE `employee` SET city = ? WHERE username = '$_SESSION[username]' AND role = '$_SESSION[role]'");
        $stmt->bind_param('s', $city);
        $stmt->execute();
        $stmt->close();    }

    if (!empty($post_code)) {
        $stmt = $db->prepare("UPDATE `employee` SET post_code = ? WHERE username = '$_SESSION[username]' AND role = '$_SESSION[role]'");
        $stmt->bind_param('s', $post_code);
        $stmt->execute();
        $stmt->close();
    }

    if (!empty($contact_phone_region)) {
        $stmt = $db->prepare("UPDATE `employee` SET contact_phone_region = ? WHERE username = '$_SESSION[username]' AND role = '$_SESSION[role]'");
        $stmt->bind_param('s', $contact_phone_region);
        $stmt->execute();
        $stmt->close();    }

    if (!empty($contact_phone)) {
        $stmt = $db->prepare("UPDATE `employee` SET contact_phone = ? WHERE username = '$_SESSION[username]' AND role = '$_SESSION[role]'");
        $stmt->bind_param('s', $contact_phone);
        $stmt->execute();
        $stmt->close();
    }

    if (!empty($contact_email)) {
        $stmt = $db->prepare("UPDATE `employee` SET contact_email = ? WHERE username = '$_SESSION[username]' AND role = '$_SESSION[role]'");
        $stmt->bind_param('s', $contact_email);
        $stmt->execute();
        $stmt->close();
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
