<?php include 'header.php'; ?>
<div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
<?php

function checkUserExists() {
    include 'dbConnect.php';
	$user=$_POST["username"];
    //$query = "SELECT * FROM `customer` WHERE '$_POST[username]' = username";
	/*if ($stmt = $db->prepare("SELECT username FROM `customer` WHERE username = ?"))
	{
		$stmt->bind_param("s", $user);
		$stmt->execute();
		$stmt->bind_result($result);
		$stmt->mysqli_stmt_store_result($result);
		
	}*/
    //$result = mysqli_query($db, $query) or die(mysqli_error($db));

    //$count = mysqli_num_rows($result);
	//
	$result=mysqli_prepare($db, 'SELECT username FROM `customer` WHERE username = ?');
	mysqli_stmt_bind_param($result,'s', $user);
	mysqli_stmt_execute($result);
	mysqli_stmt_store_result($result);
	$count = mysqli_stmt_num_rows($result);
    if ($count == 1) {
        echo '<h3>A user with that username exists</h3>';
    } else {
        registerUser();
    }

}
function registerUser() {

    include 'dbConnect.php';

    $username = $_POST["username"];
    $passwordInsecure = $_POST["password"];
    $password = sha1($passwordInsecure);
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


    /*$query = "INSERT INTO customer(title, forename, surname, street, county, city, post_code, contact_phone_region, contact_phone, contact_email, username, password) VALUES ('$title', '$forename', '$surname', '$street', '$county', '$city', '$post_code', '$contact_phone_region', '$contact_phone', '$contact_email', '$username', '$password')";
	
    $result = mysqli_query($db, $query) or die(mysqli_error($db));*/
	$query=mysqli_prepare($db,"INSERT INTO customer(title, forename, surname, street, county, city, post_code, contact_phone_region, contact_phone, contact_email, username, password) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
	
	mysqli_stmt_bind_param($query,'ssssssssssss',$title,$forename,$surname,$street,$county,$city,$post_code,$contact_phone_region,$contact_phone,$contact_email,$username,$password);
	mysqli_stmt_execute($query);
	mysqli_stmt_close($query);
    echo "<h2 style='text-align:center;'>Thanks for registering!</h2>";
}

if (isset($_POST["register"])) {
    checkUserExists();
}
?>
		</div>
	</div>
</div>


<?php include 'footer.php'; ?>
