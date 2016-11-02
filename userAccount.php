<?php include 'header.php'; ?>
<?php include 'dbConnect.php'; ?>

<?php
if (isset($_SESSION["loggedIn"]) == "loggedIn") {
    $query = "SELECT * FROM `customer` WHERE '$_SESSION[username]' = username";
    $result = mysqli_query($db, $query) or die(mysqli_error($db));

    $row = mysqli_fetch_array($result);

    $count = mysqli_num_rows($result);
    if ($count == 1) {
        $_SESSION['title'] = $row[1];
        $_SESSION['forename'] = $row[2];
        $_SESSION['surname'] = $row[3];
        $_SESSION['street'] = $row[4];
        $_SESSION['county'] = $row[5];
        $_SESSION['city'] = $row[6];
        $_SESSION['post_code'] = $row[7];
        $_SESSION['contact_phone_region'] = $row[8];
        $_SESSION['contact_phone'] = $row[9];
        $_SESSION['contact_email'] = $row[10];
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
<?php } else {
    echo '<h2>No User Found</h2>';
} ?>

<?php include 'footer.php'; ?>
