<?php include 'header.php'; ?>

    <div class="container-fluid">
        <?php if ( isset($_SESSION["admLoggedIn"]) == "admLoggedIn") { ?>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <form name="Register" method="POST" action="DBMSCreateBranch.php" class="form-horizontal">
                    <fieldset>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="street">Street</label>
                            <div class="col-md-4">
                                <input id="street" name="street" type="text" placeholder="Dundee Street"
                                       class="form-control input-md"
                                       required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="county">County</label>
                            <div class="col-md-4">
                                <input id="county" name="county" type="text" placeholder="Angus"
                                       class="form-control input-md"
                                       required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="city">City</label>
                            <div class="col-md-4">
                                <input id="city" name="city" type="text" placeholder="Dundee"
                                       class="form-control input-md"
                                       required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="post_code">Post Code</label>
                            <div class="col-md-4">
                                <input id="post_code" name="post_code" type="text" placeholder="DD1 4FG"
                                       class="form-control input-md" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="contact_phone_region">Contact Phone
                                Region</label>
                            <div class="col-md-4">
                                <input id="contact_phone_region" name="contact_phone_region" type="text"
                                       placeholder="01382" class="form-control input-md" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="contact_phone">Contact Phone</label>
                            <div class="col-md-4">
                                <input id="contact_phone" name="contact_phone" type="text" placeholder="555444"
                                       class="form-control input-md" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="contact_email">Contact Email</label>
                            <div class="col-md-4">
                                <input id="contact_email" name="contact_email" type="text" placeholder="branch@delivrhyno.com"
                                       class="form-control input-md" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="create_branch"></label>
                            <div class="col-md-1">
                                <button type="submit" value="create_branch" id="create_branch" name="create_branch"
                                        class="btn btn-success">Create Branch
                                </button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class="col-md-1"></div>
<?php } else {
    echo '<h1>You do not appear to be an admin! Access Denied!</h1>';
} ?>
        </div>

<?php include 'footer.php'; ?>