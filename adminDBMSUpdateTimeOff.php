<?php include 'header.php'; ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <form name="Register" method="POST" action="DBMSUpdateTimeOff.php" class="form-horizontal">
                    <fieldset>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="employeeID">Employee ID</label>
                            <div class="col-md-4">
                                <input id="employeeID" name="employeeID" type="text"
                                       placeholder="Select Employee via ID" class="form-control input-md" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="leaveCategory">Leave Category</label>
                            <div class="col-md-4">
                                <input id="leaveCategory" name="leaveCategory" type="text"
                                       placeholder="Sickness | Holiday" class="form-control input-md" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="startLeave">Start of Leave</label>
                            <div class="col-md-4">
                                <input id="startLeave" name="startLeave" type="text"
                                       placeholder="YYYY-MM-DD HH:MM:SS" class="form-control input-md" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="endLeave">End of Leave</label>
                            <div class="col-md-4">
                                <input id="endLeave" name="endLeave" type="text"
                                       placeholder="YYYY-MM-DD HH:MM:SS" class="form-control input-md" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="leaveDesc">Leave Description</label>
                            <div class="col-md-4">
                                <input id="leaveDesc" name="leaveDesc" type="text"
                                       placeholder="Sore stomach" class="form-control input-md">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="newTimeOff"></label>
                            <div class="col-md-1">
                                <button type="submit" value="newTimeOff" id="newTimeOff" name="newTimeOff"
                                        class="btn btn-success">Set New Employee Payroll Details
                                </button>
                            </div>
                        </div>

                    </fieldset>
                </form>
            </div>
            <div class="col-md-1"></div>
        </div>

<?php include 'footer.php'; ?>