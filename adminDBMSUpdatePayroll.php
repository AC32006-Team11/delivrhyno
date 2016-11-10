<?php include 'header.php'; ?>
<?php

if (isset($_SESSION["admLoggedIn"]) == "admLoggedIn") { ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <form name="Register" method="POST" action="DBMSUpdatePayroll.php" class="form-horizontal">
                    <fieldset>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="employeeID">Employee ID</label>
                            <div class="col-md-4">
                                <input id="employeeID" name="employeeID" type="text"
                                       placeholder="Select Employee via ID" class="form-control input-md" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="salary">Salary</label>
                            <div class="col-md-4">
                                <input id="salary" name="salary" type="text"
                                       placeholder="20000.00" class="form-control input-md">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="startEmploy">Start of Employment</label>
                            <div class="col-md-4">
                                <input id="startEmploy" name="startEmploy" type="text"
                                       placeholder="YYYY-MM-DD HH:MM:SS" class="form-control input-md">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="endEmploy">End of Employment</label>
                            <div class="col-md-4">
                                <input id="endEmploy" name="endEmploy" type="text"
                                       placeholder="YYYY-MM-DD HH:MM:SS" class="form-control input-md">
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-md-1 control-label" for="update_employee"></label>
                            <div class="col-md-2">
                                <button type="submit" value="new_employee" id="new_employee" name="new_employee"
                                        class="btn btn-success">Set New Employee Payroll Details
                                </button>
                            </div>

                            <label class="col-md-1 control-label" for="update_employee"></label>
                            <div class="col-md-2">
                                <button type="submit" value="update_employee" id="update_employee"
                                        name="update_employee"
                                        class="btn btn-success">Update Employee Payroll Details
                                </button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class="col-md-1"></div>
        </div>
<?php } else {
    echo '<h2>You do not appear to be an admin!  Access Denied!</h2>';
} ?>
<?php include 'footer.php'; ?>