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

    //$query = "SELECT * FROM `customer` WHERE username = '$username' and password='$password'";
    //$result = mysqli_query($db, $query) or die(mysqli_error($db));
	
    //$row = mysqli_fetch_array($result);
	$result=mysqli_prepare($db,'SELECT * FROM `customer` WHERE username =? and password=?') or die(mysqli_error($db));
	mysqli_stmt_bind_param($result,'ss',$username,$password);
	mysqli_stmt_execute($result);
	mysqli_stmt_store_result($result);
    $count = mysqli_stmt_num_rows($result);
    if ($count == 1) {
        $_SESSION['loggedIn'] = "loggedIn";
        $_SESSION['username'] = $username;
        echo "<h2 style='text-align:center;'>Valid Login Credentials</h2>";
		
    } 
	else 
	{
		echo "<h2 style='text-align:center;'>Invalid Login Credentials</h2>";
	}
	echo "<h2 style='text-align:center;'>Redirecting you to the home page...</h2>";
	?><script>
    setTimeout(function(){location.href="index.php"} , 1500);
	</script><?php
}

?>
		</div>
	</div>
</div>

<?php include 'footer.php'; ?>