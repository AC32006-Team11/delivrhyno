<?php include 'header.php'; ?>

<?php function deleteBranch()
{

    include 'dbConnect.php';

    $branchID = $_POST["branchID"];

    if (!empty($branchID)) {
        $query = "DELETE FROM `branch` WHERE branch_id = '$branchID'";
        $result = mysqli_query($db, $query) or die(mysqli_error($db));
    }

}

if (isset($_POST["delete_branch"])) {
    deleteBranch();

    echo
    '<div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Deleted branch</h1>
                </div>
            </div>
        </div>';
} ?>

<?php include 'footer.php'; ?>
