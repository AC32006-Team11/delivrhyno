<?php include 'header.php'; ?>

<?php function advancedQuery1()
{

    include 'dbConnect.php';

    $city = $_GET["city"];
	?>

    <div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 style="text-align:center;">You have searched for all staff at the Delivrhyno branch
                in <?php echo "$city" ?></h2>
            <br>
        </div>
    </div>
    <div class="row">
    <div class="col-md-12">
    <table class="table table-striped table-bordered table-condensed" style="width:100%";>
    <thead>
	<tr>
		<th>Forename</th>
		<th>Surname</th>
		<th>Role</th>
		<th>Salary</th>
	</tr>
    </thead>

    <?php
    if (!empty($city)) {
        $query = "SELECT forename, surname, role, salary
					FROM employee e, payroll s
					WHERE e.employee_id = s.employee_id AND EXISTS
						(SELECT * FROM branch b
						WHERE e.branch_id = b.branch_id
					AND city = '$city') ORDER BY surname ASC;";
        $result = mysqli_query($db, $query) or die(mysqli_error($db));
		while ($row = mysqli_fetch_array($result)) {
        echo '
                <tbody>
				
                    <td>' . $row[0] . '</td>
                    <td>' . $row[1] . '</td>
                    <td>' . $row[2] . '</td>
					<td>' . $row[3] . '</td>
                </tbody>';
        }
				}
		
    

}

if (isset($_GET["performquery"])) {
    advancedQuery1();
} ?>
    </tbody>
</table>
    </div>
    </div>
    </div>

<?php include 'footer.php'; ?>