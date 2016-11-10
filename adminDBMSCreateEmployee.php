<?php include 'header.php'; ?>

    <div class="container-fluid">
<?php if ( isset($_SESSION["admLoggedIn"]) == "admLoggedIn") { ?>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <form name="Register" method="POST" action="DBMSCreateEmployee.php" class="form-horizontal">
                    <fieldset>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="branchID">Branch ID</label>
                            <div class="col-md-4">
                                <input id="branchID" name="branchID" type="text"
                                       placeholder="Branch" class="form-control input-md" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="role">Role</label>
                            <div class="col-md-4">
                                <input id="role" name="role" type="text"
                                       placeholder="HR = Human Resources, DVR = Driver" class="form-control input-md" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="username">Username</label>
                            <div class="col-md-4">
                                <input pattern=".{5,12}" id="username" name="username" type="text"
                                       placeholder="Username" class="form-control input-md" required
                                       title="username must be between 5 to 12 characters long">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="password">Password</label>
                            <div class="col-md-4">
                                <input pattern=".{8,16}" id="password" name="password" type="password"
                                       placeholder="Password" class="form-control input-md" required
                                       title="password must be between 8 to 16 characters long">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="contact_email">Contact Email</label>
                            <div class="col-md-4">
                                <input id="contact_email" name="contact_email" type="email" placeholder="name@delivryhno.com"
                                       class="form-control input-md" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="title">Title</label>
                            <div class="col-md-4">
                                <input id="title" name="title" type="text" placeholder="Mr | Mrs | Ms"
                                       class="form-control input-md" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="forename">Forename</label>
                            <div class="col-md-4">
                                <input id="forename" name="forename" type="text" placeholder="John"
                                       class="form-control input-md" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="surname">Surname</label>
                            <div class="col-md-4">
                                <input id="surname" name="surname" type="text" placeholder="Smith"
                                       class="form-control input-md" required>
                            </div>
                        </div>

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
                                       placeholder="44" class="form-control input-md" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="contact_phone">Contact Phone</label>
                            <div class="col-md-4">
                                <input id="contact_phone" name="contact_phone" type="text" placeholder="7706935587"
                                       class="form-control input-md" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="holiday_entitlement">Holiday Entitlement</label>
                            <div class="col-md-4">
                                <input id="holiday_entitlement" name="holiday_entitlement" type="text" placeholder="5.0"
                                       class="form-control input-md" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="create_employee"></label>
                            <div class="col-md-1">
                                <button type="submit" value="create_employee" id="create_employee" name="create_employee"
                                        class="btn btn-success">Create Employee
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