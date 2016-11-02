<?php include 'header.php'; ?>
<?php include 'dbConnect.php'; ?>

<?php
if ( isset($_SESSION["loggedIn"]) == "loggedIn") { ?>
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
<?php }  else {
    echo '<h2>No User Found</h2>';
} ?>

<?php include 'footer.php';?>
