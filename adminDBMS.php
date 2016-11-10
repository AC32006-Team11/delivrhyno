<?php include 'header.php'; ?>



    <div class="container">
	<?php if ( isset($_SESSION["admLoggedIn"]) == "admLoggedIn") { ?>
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Payroll and Time off Manager</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><a href="adminDBMSUpdatePayroll.php">Manage Payroll</a></td>
                    </tr>
                    <tr>
                        <td><a href="adminDBMSUpdateTimeOff.php">Manage Time off</a></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Create</th>
                        <th>Read</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><a href="adminDBMSCreateEmployee.php">Employee</a></td>
                        <td><a href="adminDBMSReadEmployees.php">Employee</a></td>
                        <td><a href="adminDBMSUpdateEmployee.php">Employee</a></td>
                        <td><a href="adminDBMSDeleteEmployee.php">Employee</a></td>
                    </tr>
                    <tr>
                        <td><a href="adminDBMSCreateBranch.php">Branch</a></td>
                        <td><a href="adminDBMSReadBranch.php">Branch</a></td>
                        <td><a href="adminDBMSUpdateBranch.php">Branch</a></td>
                        <td><a href="adminDBMSDeleteBranch.php">Branch</a></td>
                    </tr>
                    <tr>
                        <td><a href="adminDBMSCreateRestaurant.php">Restaurant</a></td>
                        <td><a href="adminDBMSReadRestaurant.php">Restaurant</a></td>
                        <td><a href="adminDBMSUpdateRestaurant.php">Restaurant</a></td>
                        <td><a href="adminDBMSDeleteRestaurant.php">Restaurant</a></td>
                    </tr>
                    <tr>
                        <td><a href="adminDBMSCreateRestaurantMenuItem.php">Restaurant Menu Item</a></td>
                        <td><a href="adminDBMSReadRestaurantMenuItem.php">Restaurant Menu Item</a></td>
                        <td><a href="adminDBMSUpdateRestaurantMenuItem.php">Restaurant Menu Item</a></td>
                        <td><a href="adminDBMSDeleteRestaurantMenuItem.php">Restaurant Menu Item</a></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Advanced mySQL Functions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><a href="adminDBMSAdvancedQuery1.php">View All Employees at a branch</a></td>
                    </tr>
                    <tr>
                        <td><a href="adminDBMSAdvancedQuery2.php">Search for all restaraunts offering a specific menu
                                item in a city</a></td>
                    </tr>
                    <tr>
                        <td><a href="adminDBMSAdvancedQuery3.php">Display all employees and customers associated with a
                                branch in a city</a></td>
                    </tr>
                    <tr>
                        <td><a href="adminDBMSAdvancedQuery4.php">Search for restaurants that do not serve a specific
                                style of food in a city</a></td>
                    </tr>
					<tr>
                        <td><a href="adminDBMSAdvancedQuery5.php">Display employees that earn above the average salary of the company
                                </a></td>
                    </tr>
					<tr>
                        <td><a href="adminDBMSAdvancedQuery6.php">Display all restaurants and their associated branches
                                </a></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
		<?php } else {
                    echo '<h1>You do not appear to be an admin! Access Denied!</h1>';
                } ?>
    </div>

<?php include 'footer.php'; ?>