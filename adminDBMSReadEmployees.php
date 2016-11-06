<?php include 'header.php'?>

<div class="panel panel-default">
    <div class="panel-heading">Employee Table</div>
    <div class="panel-body"><p>A Complete List of Employees for each restaurant.</p></div>
    <table class="table table-condensed">
        <?php include 'DBMSReadEmployees.php';?>
    </table>

</div>

<?php include 'footer.php'?>