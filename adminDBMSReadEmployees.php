<?php include 'header.php'?>
    <div class="container">
    <div class="row">
    <div class="col-md-12">
<div class="panel panel-default">
    <div class="panel-heading">Employee Table</div>
    <div class="panel-body"><p>A Complete List of Employees for each restaurant.</p></div>
    <table class="table table-condensed">
        <?php include 'DBMSReadEmployees.php';?>
    </table>

</div></div></div></div>

<?php include 'footer.php'?>