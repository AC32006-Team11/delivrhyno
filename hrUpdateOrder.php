<?php include 'header.php'; ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <form name="Register" method="POST" action="UpdateOrder.php" class="form-horizontal">
                    <fieldset>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="transactionID">Transaction ID</label>
                            <div class="col-md-4">
                                <input id="transactionID" name="transactionID" type="text"
                                       placeholder="Select Transaction via ID" class="form-control input-md" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="status_desc">Status</label>
                            <div class="col-md-4">
                                <input id="status_desc" name="status_desc" type="text"
                                       placeholder="0 = Undelivered | 1 = Delivered" class="form-control input-md"
                                       required>
                            </div>
                        </div>

                        <label class="col-md-4 control-label" for="update_transaction"></label>
                        <div class="col-md-1">
                            <button type="submit" value="update_transaction" id="update_transaction"
                                    name="update_transaction"
                                    class="btn btn-success">Update Transaction Details
                            </button>
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>

<?php include 'footer.php'; ?>