<?php include 'header.php'; ?>

    <div class="container-fluid">
        <?php if (isset($_SESSION["HRLoggedIn"]) == "HRLoggedIn" or isset($_SESSION["DVRLoggedIn"]) == "DVRLoggedIn") { ?>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <form name="Register" method="POST" action="AssignEmployee.php" class="form-horizontal">
                    <fieldset>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="transactionID">Transaction ID</label>
                            <div class="col-md-4">
                                <input id="transactionID" name="transactionID" type="text"
                                       placeholder="Select Transaction via ID" class="form-control input-md" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="employee_id">Employee ID</label>
                            <div class="col-md-4">
                                <input id="employee_id" name="employee_id" type="text"
                                       placeholder="Select Employee via ID" class="form-control input-md"
                                       required>
                            </div>
                        </div>

                        <label class="col-md-4 control-label" for="assign_employee"></label>
                        <div class="col-md-1">
                            <button type="submit" value="assign_employee" id="assign_employee"
                                    name="assign_employee"
                                    class="btn btn-success">Assign Employee to Order
                            </button>
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class="col-md-1"></div>
        </div>
        <?php } else {
            echo '<h2>No User Found</h2>';
        } ?>
    </div>

<?php include 'footer.php'; ?>