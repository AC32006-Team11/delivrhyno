<?php include 'header.php'; ?>

<div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
<?php
include('dbConnect.php');

    if (isset($_POST['username']) and isset($_POST['password'])) {

        $username = $_POST['username'];
        $passwordInsecure = $_POST["password"];
        $password = sha1($passwordInsecure);

    $query = "SELECT * FROM `customer` WHERE username = '$username' and password='$password'";
    $result = mysqli_query($db, $query) or die(mysqli_error($db));

    $row = mysqli_fetch_array($result);

    $count = mysqli_num_rows($result);
    if ($count == 1) {
        $_SESSION['loggedIn'] = "loggedIn";
        $_SESSION['username'] = $username;
        echo "<h2 style='text-align:center;'>Valid Login Credentials</h2>";
    } 
	else 
	{
		echo "<h2 style='text-align:center;'>Invalid Login Credentials</h2>";
	}
}

?>
		</div>
	</div>
</div>

<?php include 'footer.php'; ?>