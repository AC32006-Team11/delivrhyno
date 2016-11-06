<?php include 'header.php'?>

<div class="container">
    <div class="row">
    <div class="col-md-12">
    <div class="panel panel-default">
        <div class="panel-heading">Branch Table</div>
        <div class="panel-body"><p>A Complete List of Branches.</p></div>
        <table class="table table-condensed">
            <?php include 'DBMSReadBranch.php';?>
        </table>

    </div></div></div></div>

<?php include 'footer.php'?><?php
