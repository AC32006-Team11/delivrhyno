<?php include 'header.php'; ?>

    <div class="container-fluid">
	<h2 style="text-align:center;">User Register</h2>
	<br>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <form name="Register" method="POST" action="userRegister.php" class="form-horizontal">
                    <fieldset>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="username">Username</label>
                            <div class="col-md-4">
                                <input pattern=".{5,12}" id="username" name="username" type="text"
                                       placeholder="username" class="form-control input-md" required
                                       title="username must be between 5 to 12 characters long">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="password">Password</label>
                            <div class="col-md-4">
                                <input pattern=".{8,16}" id="password" name="password" type="password"
                                       placeholder="password" class="form-control input-md" required
                                       title="password must be between 8 to 16 characters long">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="contact_email">Contact Email</label>
                            <div class="col-md-4">
                                <input id="contact_email" name="contact_email" type="email" placeholder="contact email"
                                       class="form-control input-md" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="title">Title</label>
                            <div class="col-md-4">
                                <input id="title" name="title" type="text" placeholder="title"
                                       class="form-control input-md" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="forename">Forename</label>
                            <div class="col-md-4">
                                <input id="forename" name="forename" type="text" placeholder="forename"
                                       class="form-control input-md" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="surname">Surname</label>
                            <div class="col-md-4">
                                <input id="surname" name="surname" type="text" placeholder="surname"
                                       class="form-control input-md" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="street">Street</label>
                            <div class="col-md-4">
                                <input id="street" name="street" type="text" placeholder="street"
                                       class="form-control input-md"
                                       required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="county">County</label>
                            <div class="col-md-4">
                                <input id="county" name="county" type="text" placeholder="county"
                                       class="form-control input-md"
                                       required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="city">City</label>
                            <div class="col-md-4">
                                <input id="city" name="city" type="text" placeholder="city"
                                       class="form-control input-md"
                                       required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="post_code">Post Code</label>
                            <div class="col-md-4">
                                <input id="post_code" name="post_code" type="text" placeholder="post code"
                                       class="form-control input-md" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="contact_phone_region">Contact Phone
                                Region</label>
                            <div class="col-md-4">
                                <input id="contact_phone_region" name="contact_phone_region" type="text"
                                       placeholder="contact phone region" class="form-control input-md" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="contact_phone">Contact Phone</label>
                            <div class="col-md-4">
                                <input id="contact_phone" name="contact_phone" type="text" placeholder="contact phone"
                                       class="form-control input-md" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="register"></label>
                            <div class="col-md-1">
                                <button type="submit" value="Register" id="register" name="register"
                                        class="btn btn-success">Register
                                </button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class="col-md-1"></div>
        </div>

<?php include 'footer.php'; ?>