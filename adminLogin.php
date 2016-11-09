<?php include 'header.php'; ?>

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

    $query = "SELECT * FROM `employee` WHERE username = '$username' and password = '$password' and role = 'ADM'";
    $result = mysqli_query($db, $query) or die(mysqli_error($db));

    $row = mysqli_fetch_array($result);

    $count = mysqli_num_rows($result);
    if ($count == 1) {
        $_SESSION['admLoggedIn'] = "admLoggedIn";
        $_SESSION['username'] = $username;
        echo "<h2 style='text-align:center;'>Valid Login Credentials</h2>";
		
    }
	else 
	{
		echo "<h2 style='text-align:center;'>Invalid Login Credentials</h2>";
	}
	echo "<h2 style='text-align:center;'>Redirecting you to the home page...</h2>";
	?><script>
    setTimeout(function(){location.href="index.php"} , 3000);
	</script><?php
} 
?>
		</div>
	</div>
</div>

<?php include 'footer.php'; ?>