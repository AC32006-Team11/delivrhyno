<?php include 'header.php'; ?>
<?php include 'dbConnect.php'; ?>

<?php
if (isset($_SESSION["loggedIn"]) == "loggedIn") {
        $currentUsername = $_SESSION['username'];
        if ($stmt = $db->prepare("SELECT title, forename, surname, street, county, city, post_code, contact_phone_region, contact_phone, contact_email FROM customerview WHERE username = ?")) {
            $stmt->bind_param("s", $currentUsername);
            $stmt->execute();
            $stmt->bind_result($title, $forename, $surname, $street, $county, $city, $post_code, $contact_phone_region, $contact_phone, $contact_email);
            while ($stmt->fetch()) {
                $_SESSION['title'] = $title;
                $_SESSION['forename'] = $forename;
                $_SESSION['surname'] = $surname;
                $_SESSION['street'] = $street;
                $_SESSION['county'] = $county;
                $_SESSION['city'] = $city;
                $_SESSION['post_code'] = $post_code;
                $_SESSION['contact_phone_region'] = $contact_phone_region;
                $_SESSION['contact_phone'] = $contact_phone;
                $_SESSION['contact_email'] = $contact_email;
            }
            $stmt->close();
        }
    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2>Welcome back <?php echo "$_SESSION[username]"; ?></h2>
                <h4>Your Details:
                    <small><a href="userAccountEdit.php">Edit your account details</a></small>
                </h4>
                <br>
                <ul style="list-style-type:none">
                    <li><b>Your name is : </b><?php echo "$_SESSION[title] $_SESSION[forename] $_SESSION[surname]"; ?>
                    </li>
                    <br>
                    <li><b>Your address
                            is: </b><?php echo "$_SESSION[street], $_SESSION[county], $_SESSION[city], $_SESSION[post_code]" ?>
                    </li>
                    <br>
                    <li><b>Your contact phone
                            is: </b><?php echo "+ $_SESSION[contact_phone_region] $_SESSION[contact_phone]" ?> </li>
                    <br>
                    <li><b>Your contact email is: </b><?php echo "$_SESSION[contact_email]" ?> </li>
                </ul>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
<?php }include 'footer.php'; ?>
