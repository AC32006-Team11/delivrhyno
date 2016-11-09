<?php include 'header.php'; ?>

<?php function advancedQuery3()
{

    include 'dbConnect.php';

    $city = $_GET["city"];
    ?>
    <div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 style="text-align:center;">You have searched for all customers and employees associated with the branch
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
        <th>Username</th>
        <th>Type</th>

    </tr>
    </thead>

    <?php
    if (!empty($city)) {
        $query = "(SELECT c.forename, c.surname,c.username, 'Customer' as job
					FROM customer c, branch b WHERE b.city='$city')
					UNION (SELECT e.forename, e.surname,e.username, 'Employee' as job
					FROM employee e, branch b WHERE b.city='$city') ORDER BY job,surname ASC;";
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
    advancedQuery3();


} ?>
    </tbody>
    </table>
    </div>
    </div>
    </div>

<?php include 'footer.php'; ?>