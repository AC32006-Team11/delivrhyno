<?php include 'header.php'; ?>

<?php function advancedQuery6()
{

    include 'dbConnect.php';
 
  
    ?>
    <div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 style="text-align:center;">You have searched for all restaurants and their associated branches</h2>
            <br>
        </div>
    </div>
    <div class="row">
    <div class="col-md-12">
    <table class="table table-striped table-bordered table-condensed" style="width:100%";>
    <thead>
    <tr>
        <th>Restaurant ID</th>
        <th>Restaurant Name</th>
		<th>Restaurant Description</th>
		<th>Street</th>
		<th>County</th>
        <th>City</th>
		<th>Postcode</th>
		<th>Phone Region</th>
		<th>Phone Number</th>
		<th>Delivery Time</th>
		<th>Branch</th>
		<th>Email</th>


    </tr>
    </thead>

    <?php
		//RIGHT JOIN
        $query = "SELECT r.*,b.branch_id,b.contact_email
					FROM branch b RIGHT JOIN
					restaurant r ON b.city=r.city;";
        $result = mysqli_query($db, $query) or die(mysqli_error($db));
        while ($row = mysqli_fetch_array($result)) {
            echo '
                <tbody>
				
                    <td>' . $row[0] . '</td>
                    <td>' . $row[1] . '</td>
					<td>' . $row[2] . '</td>
                    <td>' . $row[3] . '</td>
					<td>' . $row[4] . '</td>
                    <td>' . $row[5] . '</td>
					<td>' . $row[6] . '</td>
                    <td>' . $row[7] . '</td>
					<td>' . $row[8] . '</td>
                    <td>' . $row[9] . '</td>
					<td>' . $row[10] . '</td>
                    <td>' . $row[11] . '</td>
                    
                </tbody>';
        }
    


}

if (isset($_GET["performquery"])) {
    advancedQuery6();


} ?>
    </tbody>
    </table>
    </div>
    </div>
    </div>

<?php include 'footer.php'; ?>