<?php include 'header.php'; ?>

<?php function advancedQuery5()
{

    include 'dbConnect.php';
 
  
    ?>
    <div class="container">
    <div class="row">
        <div class="col-md-12">
			<?php $queryavg = "SELECT AVG(salary) FROM payroll;"; 
			$resultavg = mysqli_query($db, $queryavg) or die(mysqli_error($db));
			$avg = mysqli_fetch_array($resultavg);
			
			?>
            <h2 style="text-align:center;">You have searched for all employees that earn more than the average salary, which is £<?php echo number_format((float)"$avg[0]") ?>.</h2>
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
    
        $query = "SELECT forename,surname,role,salary FROM employee e,payroll p WHERE p.salary > (SELECT AVG(salary) FROM payroll) AND e.employee_id=p.employee_id ORDER BY surname ASC;";
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

if (isset($_GET["performquery"])) {
    advancedQuery5();


} ?>
    </tbody>
    </table>
    </div>
    </div>
    </div>

<?php include 'footer.php'; ?>