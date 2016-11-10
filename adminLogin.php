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

					if (!empty($username)) {
						$result=mysqli_prepare($db,"SELECT role FROM `employee` WHERE (username = ? and password=?)");
						mysqli_stmt_bind_param($result,'ss',$username,$password);
						mysqli_stmt_execute($result);
						mysqli_stmt_store_result($result);
						mysqli_stmt_bind_result($result,$roleID);
					}

					$count = mysqli_stmt_num_rows($result);
					if ($count == 1) {
						while (mysqli_stmt_fetch($result)) {
							if ($roleID == "ADM") {
								$_SESSION['roleID'] = $roleID;
								$_SESSION['admLoggedIn'] = "admLoggedIn";
								$_SESSION['username'] = $username;

							} else {
								$_SESSION['roleID'] = $roleID;
								$_SESSION['admLoggedIn'] = "admLoggedIn";
								$_SESSION['username'] = $username;
							}
						}


						echo "<h2 style='text-align:center;'>Valid Login Credentials</h2>";

					}
					else
					{
						echo "<h2 style='text-align:center;'>Invalid Login Credentials</h2>";
					}
					echo "<h2 style='text-align:center;'>Redirecting you to the home page...</h2>";
					?><script>
						setTimeout(function(){location.href="index.php"} , 3000);
					</script>
					<div class="container col-md-6 col-md-offset-3">
						<div class="progress progress-striped active">
							<div class="progress-bar progress-bar-success" style="width: 0%;">
								<script>
									$(".progress-bar").animate({
										width: "100%"
									}, 1500 );
								</script>
							</div>
						</div>
					</div>​
					<?php
				}
				?>
			</div>
		</div>
</div>

<?php include 'footer.php'; ?>