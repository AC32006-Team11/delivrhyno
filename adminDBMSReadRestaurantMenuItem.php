<?php include 'header.php'?>

    <div class="panel panel-default">
        <div class="panel-heading">Menu Item Table</div>
        <div class="panel-body"><p>A Complete List of Menu Items for each restaurant.</p></div>
        <table class="table table-condensed table-bordered">
            <?php include 'DBMSReadRestaurantMenuItem.php';?>
        </table>

    </div>

<?php include 'footer.php'?>