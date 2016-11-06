<?php include 'header.php'?>

    <div class="panel panel-default">
        <div class="panel-heading">Branch Table</div>
        <div class="panel-body"><p>A Complete List of Branches.</p></div>
        <table class="table table-condensed">
            <?php include 'DBMSReadBranch.php';?>
        </table>

    </div>

<?php include 'footer.php'?><?php
