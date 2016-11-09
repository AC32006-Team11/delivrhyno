<?php include 'header.php'; ?>
<meta http-equiv="refresh" content="2; url="index.php" />
<div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

<?php
include('dbConnect.php');


//still requires role filtering
if (isset($_POST['username']) and isset($_POST['password'])) {

    $username = $_POST['username'];
    $passwordInsecure = $_POST["password"];
    $password = sha1($passwordInsecure);

    $query = "SELECT * FROM `employee` WHERE (username = '$username' and password='$password') and (role = 'HR' OR role ='DVR')";
    $result = mysqli_query($db, $query) or die(mysqli_error($db));

    $row = mysqli_fetch_array($result);

    $count = mysqli_num_rows($result);
    if ($count == 1) {
        if ($row[2] == "HR") {
            $_SESSION['HRLoggedIn'] = "HRLoggedIn";
            $_SESSION['username'] = $username;
        } else {
            $_SESSION['DVRLoggedIn'] = "DVRLoggedIn";
            $_SESSION['username'] = $username;
        }


        echo "<h2 style='text-align:center;'>Valid Login Credentials</h2>";
		
    }
	else 
	{
		echo "<h2 style='text-align:center;'>Invalid Login Credentials</h2>";
	}
	echo "<h2 style='text-align:center;'>Redirecting you to the home page...</h2>";
}
?>
		</div>
	</div>
</div>

<?php include 'footer.php'; ?>