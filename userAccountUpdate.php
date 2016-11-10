<?php include 'header.php'; ?>

<?php
if (isset($_SESSION["loggedIn"]) == "loggedIn") {
	$currentUsername = $_SESSION['username'];
	if ($stmt = $db->prepare("SELECT title, forename, surname, street, county, city, post_code, contact_phone_region, contact_phone, contact_email FROM customer WHERE username = ?")) {
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
}
function updateUser()
{

    include 'dbConnect.php';

    $titleP = $_POST["title"];
    $forenameP = $_POST["forename"];
    $surnameP = $_POST["surname"];
    $streetP = $_POST["street"];
    $countyP = $_POST["county"];
    $cityP = $_POST["city"];
    $post_codeP = $_POST["post_code"];
    $contact_phone_regionP = $_POST["contact_phone_region"];
    $contact_phoneP = $_POST["contact_phone"];
    $contact_emailP = $_POST["contact_email"];


    if ($titleP!=$_SESSION['title']) {
        //$query = "UPDATE `customer` SET title = '$title' WHERE username = '$_SESSION[username]'";
        //$result = mysqli_query($db, $query) or die(mysqli_error($db));
		$query = mysqli_prepare($db,"UPDATE `customer` SET title = ? WHERE username = ?");
		mysqli_stmt_bind_param($query,'ss',$titleP,$_SESSION['username']);
		mysqli_stmt_execute($query);
		mysqli_stmt_close($query);
		
    }

    if ($forenameP!=$_SESSION['forename']) {
        /*$query = "UPDATE `customer` SET forename = '$forename' WHERE username = '$_SESSION[username]'";
        $result = mysqli_query($db, $query) or die(mysqli_error($db));*/
		$query = mysqli_prepare($db,"UPDATE `customer` SET forename = ? WHERE username = ?");
		mysqli_stmt_bind_param($query,'ss',$forenameP,$_SESSION['username']);
		mysqli_stmt_execute($query);
		mysqli_stmt_close($query);
    }

    if ($surnameP!=$_SESSION['surname']) {
        /*$query = "UPDATE `customer` SET surname = '$surname' WHERE username = '$_SESSION[username]'";
        $result = mysqli_query($db, $query) or die(mysqli_error($db));*/
		$query = mysqli_prepare($db,"UPDATE `customer` SET surname = ? WHERE username = ?");
		mysqli_stmt_bind_param($query,'ss',$surnameP,$_SESSION['username']);
		mysqli_stmt_execute($query);
		mysqli_stmt_close($query);
    }

    if ($streetP!=$_SESSION['street']) {
        /*$query = "UPDATE `customer` SET street = '$street' WHERE username = '$_SESSION[username]'";
        $result = mysqli_query($db, $query) or die(mysqli_error($db));*/
		$query = mysqli_prepare($db,"UPDATE `customer` SET street = ? WHERE username = ?");
		mysqli_stmt_bind_param($query,'ss',$streetP,$_SESSION['username']);
		mysqli_stmt_execute($query);
		mysqli_stmt_close($query); 
		
    }

    if ($countyP!=$_SESSION['county']) {
        /*$query = "UPDATE `customer` SET county = '$county' WHERE username = '$_SESSION[username]'";
        $result = mysqli_query($db, $query) or die(mysqli_error($db));*/
		$query = mysqli_prepare($db,"UPDATE `customer` SET county = ? WHERE username = ?");
		mysqli_stmt_bind_param($query,'ss',$countyP,$_SESSION['username']);
		mysqli_stmt_execute($query);
		mysqli_stmt_close($query); 
		
    }

    if ($cityP!=$_SESSION['city']) {
        /*$query = "UPDATE `customer` SET city = '$city' WHERE username = '$_SESSION[username]'";
        $result = mysqli_query($db, $query) or die(mysqli_error($db));*/
		$query = mysqli_prepare($db,"UPDATE `customer` SET city = ? WHERE username = ?");
		mysqli_stmt_bind_param($query,'ss',$cityP,$_SESSION['username']);
		mysqli_stmt_execute($query);
		mysqli_stmt_close($query); 
    }

    if ($post_codeP!=$_SESSION['post_code']) {
        /*$query = "UPDATE `customer` SET post_code = '$post_code' WHERE username = '$_SESSION[username]'";
        $result = mysqli_query($db, $query) or die(mysqli_error($db));*/
		$query = mysqli_prepare($db,"UPDATE `customer` SET post_code = ? WHERE username = ?");
		mysqli_stmt_bind_param($query,'ss',$post_codeP,$_SESSION['username']);
		mysqli_stmt_execute($query);
		mysqli_stmt_close($query); 
    }

    if ($contact_phone_regionP!=$_SESSION['contact_phone_region']) {
        /*$query = "UPDATE `customer` SET contact_phone_region = '$contact_phone_region' WHERE username = '$_SESSION[username]'";
        $result = mysqli_query($db, $query) or die(mysqli_error($db));*/
		$query = mysqli_prepare($db,"UPDATE `customer` SET contact_phone_region = ? WHERE username = ?");
		mysqli_stmt_bind_param($query,'ss',$contact_phone_regionP,$_SESSION['username']);
		mysqli_stmt_execute($query);
		mysqli_stmt_close($query); 
    }

    if ($contact_phoneP!=$_SESSION['contact_phone']) {
        /*$query = "UPDATE `customer` SET contact_phone = '$contact_phone' WHERE username = '$_SESSION[username]'";
        $result = mysqli_query($db, $query) or die(mysqli_error($db));*/
		$query = mysqli_prepare($db,"UPDATE `customer` SET contact_phone = ? WHERE username = ?");
		mysqli_stmt_bind_param($query,'ss',$contact_phoneP,$_SESSION['username']);
		mysqli_stmt_execute($query);
		mysqli_stmt_close($query); 
    }

    if ($contact_emailP!=$_SESSION['contact_email']) {
        /*$query = "UPDATE `customer` SET contact_email = '$contact_email' WHERE username = '$_SESSION[username]'";
        $result = mysqli_query($db, $query) or die(mysqli_error($db));*/
		$query = mysqli_prepare($db,"UPDATE `customer` SET contact_email = ? WHERE username = ?");
		mysqli_stmt_bind_param($query,'ss',$contact_emailP,$_SESSION['username']);
		mysqli_stmt_execute($query);
		mysqli_stmt_close($query); 
		
    }
}

if (isset($_POST["UpdateAccount"])) {
    updateUser();

    echo
    '<div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 style="text-align:center">Thanks for updating your details!</h2>
                </div>
            </div>
        </div>';
} ?>

<?php include 'footer.php'; ?>
