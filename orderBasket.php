<?php include 'header.php';?>
<?php include 'dbConnect.php'; ?>

<!--$_SESSION['example'] = $row[1];
$_SESSION[example];-->




<div class="container">
<?php
		if ( isset($_SESSION["loggedIn"]) == "loggedIn") { ?>
    <div class="row">
        <div class="col-md-6" >
			<div style="border-radius: 20px;
						background: #f8f8f8;
						border-color:blue;
						border: 4px solid #66CDAA;
						padding-left:35px;
						padding-right:35px;
						padding-top:2px;
						padding-bottom:15px;">
            <h2 style="text-align:center;">Your Basket</h2>
			<hr style="border-color:#e7e7e7;">
			<?php
			if ( isset($_SESSION["selectedItems"]) != null) { 
			
			$arrlength=count($_SESSION[selectedItems]);
			for($x=0;$x<$arrlength;$x++)
			{?>
			
            <p><?php $selectedItems[$x]?></p>
			<?php
			}
			
			}  else {
				echo'<h1>No User Found</h1>';
			}
			?>
			</div>
        </div>
		<div class="col-md-4 col-md-offset-1">
		
			<h2>Rhino facts of the day</h2>
			<hr>
			<p style="color:grey;"><i>The Indian Rhinoceros has a horn which can be up to 60 centimetres in length.</i></p>
			<br>
			<p style="color:grey;"><i>The Javan Rhinoceros is one of the most endangered large mammals in the world.</i></p>
			<br>
			<p style="color:grey;"><i>The Black Rhinoceros has 84 chromosomes.</i></p>
			
			
			
		</div>
    </div>
	<?php }  else {
				echo'<h1>No User Found</h1>';
			} ?>
</div>

<?php include 'footer.php';?>