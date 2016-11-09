<?php include 'header.php'; ?>

<div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
<?php

if (isset($_SESSION[""]) == "") {
    session_unset();
    session_destroy();

    echo "<h2 style='text-align:center;'>You have been successfully logged out</h2>";
	echo "<h2 style='text-align:center;'>Redirecting you to the home page...</h2>";
	?><script>
    setTimeout(function(){location.href="index.php"} , 3000);
	</script><?php
} else {
    echo "<h2 style='text-align:center;'>No user logged in</h2>";
} ?>
		</div>
	</div>
</div>

<?php include 'footer.php'; ?>