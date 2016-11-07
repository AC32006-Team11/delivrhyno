<?php include 'header.php'; ?>

    <div class="container">
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
                        <td><a href=""></a></td>
                        <td><a href="adminDBMSUpdateEmployee.php">Employee</a></td>
                        <td><a href="adminDBMSDeleteEmployee.php">Employee</a></td>
                    </tr>
                    <tr>
                        <td><a href="adminDBMSCreateBranch.php">Branch</a></td>
                        <td><a href=""></a></td>
                        <td><a href="adminDBMSUpdateBranch.php">Branch</a></td>
                        <td><a href="adminDBMSDeleteBranch.php">Branch</a></td>
                    </tr>
                    <tr>
                        <td><a href="adminDBMSCreateRestaurant.php">Restaurant</a></td>
                        <td><a href=""></a></td>
                        <td><a href="adminDBMSUpdateRestaurant.php">Restaurant</a></td>
                        <td><a href="adminDBMSDeleteRestaurant.php">Restaurant</a></td>
                    </tr>
                    <tr>
                        <td><a href="adminDBMSCreateRestaurantMenuItem.php">Restaurant Menu Item</a></td>
                        <td><a href=""></a></td>
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
                        <td><a href="adminDBMSAdvancedQuery2.php">Search for all restaraunts offering a specific menu item in a city</a></td>
                    </tr>
                    <tr>
                        <td>Option 3</td>
                    </tr>
                    <tr>
                        <td>Option 4</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<?php include 'footer.php'; ?>