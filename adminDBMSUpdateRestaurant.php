<?php include 'header.php'; ?>
<?php

if (isset($_SESSION["admLoggedIn"]) == "admLoggedIn") { ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <form name="Register" method="POST" action="DBMSUpdateRestaurant.php" class="form-horizontal">
                    <fieldset>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="restaurantID">Restaurant ID</label>
                            <div class="col-md-4">
                                <input id="restaurantID" name="restaurantID" type="text"
                                       placeholder="Select Restaurant via ID" class="form-control input-md" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="restaurant_name">Restaurant Name</label>
                            <div class="col-md-4">
                                <input id="restaurant_name" name="restaurant_name" type="text"
                                       placeholder="Torino" class="form-control input-md">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="restaurant_description">Restaurant Description</label>
                            <div class="col-md-4">
                                <input id="restaurant_description" name="restaurant_description" type="text"
                                       placeholder="Italian" class="form-control input-md">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="street">Street</label>
                            <div class="col-md-4">
                                <input id="street" name="street" type="text" placeholder="Dundee Street"
                                       class="form-control input-md">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="county">County</label>
                            <div class="col-md-4">
                                <input id="county" name="county" type="text" placeholder="Angus"
                                       class="form-control input-md">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="city">City</label>
                            <div class="col-md-4">
                                <input id="city" name="city" type="text" placeholder="City of Dundee"
                                       class="form-control input-md">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="post_code">Post Code</label>
                            <div class="col-md-4">
                                <input id="post_code" name="post_code" type="text" placeholder="DD2 3GF"
                                       class="form-control input-md">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="contact_phone_region">Contact Phone
                                Region</label>
                            <div class="col-md-4">
                                <input id="contact_phone_region" name="contact_phone_region" type="text"
                                       placeholder="01821" class="form-control input-md">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="contact_phone">Contact Phone</label>
                            <div class="col-md-4">
                                <input id="contact_phone" name="contact_phone" type="text" placeholder="555444"
                                       class="form-control input-md">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="delivery_time">Delivery Time</label>
                            <div class="col-md-4">
                                <input id="delivery_time" name="delivery_time" type="text" placeholder="HH:MM:SS"
                                       class="form-control input-md">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="update_restaurant"></label>
                            <div class="col-md-1">
                                <button type="submit" value="update_restaurant" id="update_restaurant" name="update_restaurant"
                                        class="btn btn-success">Update Restaurant
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