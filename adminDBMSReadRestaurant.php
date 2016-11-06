<?php include 'header.php'?>
    <div class="container">
    <div class="row">
    <div class="col-md-12">
    <div class="panel panel-default">
        <div class="panel-heading">Restaurant Table</div>
        <div class="panel-body"><p>A Complete List of Restaurants.</p></div>
        <table class="table table-condensed table-striped">
            <?php include 'DBMSReadRestaurant.php';?>
        </table>

    </div></div></div></div>

<?php include 'footer.php'?><?php
