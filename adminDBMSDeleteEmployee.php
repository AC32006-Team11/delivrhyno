<?php include 'header.php'; ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <form name="Register" method="POST" action="DBMSDeleteEmployee.php" class="form-horizontal">
                    <fieldset>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="employeeID">Employee ID</label>
                            <div class="col-md-4">
                                <input id="employeeID" name="employeeID" type="text"
                                       placeholder="Select Employee via ID" class="form-control input-md" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="delete_employee"></label>
                            <div class="col-md-1">
                                <button type="submit" value="delete_employee" id="delete_employee" name="delete_employee"
                                        class="btn btn-success">Delete Employee
                                </button>
                            </div>
                        </div>

                    </fieldset>
                </form>
            </div>
            <div class="col-md-1"></div>
        </div>

<?php include 'footer.php'; ?>