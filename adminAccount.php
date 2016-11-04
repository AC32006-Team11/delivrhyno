<?php include 'header.php'; ?>
<?php include 'dbConnect.php'; ?>

<?php

//insert into anthonygrimesdb.employee(branch_id, role, title, forename, surname, street, county, city, post_code, contact_phone_region, contact_phone, contact_email, holiday_entitlement, username, password) VALUES ('', '','','','','','','','','','','','','','')
if (isset($_SESSION["admLoggedIn"]) == "admLoggedIn") {
    $query = "SELECT * FROM `employee` WHERE '$_SESSION[username]' = username and role = 'ADM'";
    $result = mysqli_query($db, $query) or die(mysqli_error($db));

    $row = mysqli_fetch_array($result);

    $count = mysqli_num_rows($result);
    if ($count == 1) {
        $_SESSION['id'] = $row[0];
        $_SESSION['role'] = $row[2];
        $_SESSION['title'] = $row[3];
        $_SESSION['forename'] = $row[4];
        $_SESSION['surname'] = $row[5];
        $_SESSION['street'] = $row[6];
        $_SESSION['county'] = $row[7];
        $_SESSION['city'] = $row[8];
        $_SESSION['post_code'] = $row[9];
        $_SESSION['contact_phone_region'] = $row[10];
        $_SESSION['contact_phone'] = $row[11];
        $_SESSION['contact_email'] = $row[12];
        $_SESSION['holiday_entitlement'] = $row[13];
    }

    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2>Welcome back <?php echo "$_SESSION[username]"; ?></h2>
                <h4>Your Details:
                    <small><a href="adminAccountEdit.php">Edit your account details</a></small>
                </h4>
                <br>
                <ul style="list-style-type:none">
                    <li><b>Your Employee ID is: </b><?php echo "$_SESSION[id]"; ?></li>
                    <br>
                    <li><b>You are currently : </b><?php echo "$_SESSION[role]"; ?></li>
                    <br>
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
                    <br>
                    <li><b>You have </b><?php echo "$_SESSION[holiday_entitlement]" ?><b> days of holiday remaining</b></li>
                </ul>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
<?php } else {
    echo '<h2>No User Found</h2>';
} ?>

<?php include 'footer.php'; ?>
