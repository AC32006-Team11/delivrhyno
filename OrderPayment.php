<?php include 'header.php'; ?>
<?php include 'dbConnect.php'; ?>

<div class="container">
    <div class="row">
		<div class="col-md-6">
		<?php
		if ( isset($_SESSION["loggedIn"]) == "loggedIn") { ?>
		<h2>Complete Your Order</h2> <!--Is someone going to pass through a total price to this page so that I could fill it up?-->
				<br>
				<p>Use the dropdown box below to select the method that you would like to complete the payment with.</p>
				<br>
				<br>				
				<div class="dropdown">
					<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Payment Method
					<span class="caret"></span></button>
					<ul class="dropdown-menu">
					<li><a href="#">Pay at the door</a></li>
					<li><a href="#">Pay using Paypal</a></li>
					</ul>
				</div>
			<br>
			<br>
			<br>
			<br>
			<br>
			
			<p style="color:grey;"><i>Select 'Pay at the door' to make your payment when the order is delivered to your house. Selecting this will immediately direct you to the order confirmation page.</i></p>
			<p style="color:grey;"><i>With Paypal, you will be redirected to the Paypal Website were you can make a secure transaction. Once completed you will be redirected to the order confirmation page.</i></p>
			<?php }  else {
				echo'<h1>No User Found</h1>';
			} ?>
		</div>
	</div>
</div>


<?php include 'footer.php'; ?>
