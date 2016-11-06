<?php include 'header.php'; ?>

<?php function advancedQuery1()
{

    include 'dbConnect.php';

    $city = $_GET["city"];
	?>
	<table class "table">
	<tr>
		<th>Forename</th>
		<th>Surname</th>
		<th>Role</th>
		<th>Salary</th>
	</tr>
	<?php
    if (!empty($city)) {
        $query = "SELECT forename, surname, role, salary
					FROM employee e, payroll s
					WHERE e.employee_id = s.employee_id AND EXISTS
						(SELECT * FROM branch b
						WHERE e.branch_id = b.branch_id
					AND city = '$city') ORDER BY surname DESC;";
        $result = mysqli_query($db, $query) or die(mysqli_error($db));
		while ($row = mysqli_fetch_array($result)) {
        echo '
                <tr>
                    <td>' . $row[0] . '</td>
                    <td>' . $row[1] . '</td>
                    <td>' . $row[2] . '</td>
					<td>' . $row[3] . '</td>
                </tr>'; }
				}
		
    

}

if (isset($_GET["performquery"])) {
    advancedQuery1();

    
} ?>

</table>

<?php include 'footer.php'; ?>