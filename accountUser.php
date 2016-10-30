<?php include 'header.php';?>
<?php include 'dbConnect.php'; ?>

<?php
if ( isset($_SESSION["loggedIn"]) == "loggedIn") { ?>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h1>Welcome back <?php echo"$_SESSION[username]";?></h1>
            </div>
            <div class="col-md-8">
                <h1>Your Details: </h1>
            </div>
        </div>
    </div>
<?php }  else {
    echo'<h1>No User Found</h1>';
} ?>

<?php include 'footer.php';?>
