<?php include 'header.php'?>

    <div class="panel panel-default">
        <div class="panel-heading">Restaurant Table</div>
        <div class="panel-body"><p>A Complete List of Restaurants.</p></div>
        <table class="table table-condensed table-striped">
            <?php include 'DBMSReadRestaurant.php';?>
        </table>

    </div>

<?php include 'footer.php'?><?php
