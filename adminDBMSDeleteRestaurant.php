<?php include 'header.php'; ?>

    <div class="container-fluid">
<?php if ( isset($_SESSION["admLoggedIn"]) == "admLoggedIn") { ?>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <form name="Register" method="POST" action="DBMSDeleteRestaurant.php" class="form-horizontal">
                    <fieldset>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="restaurantID">Restaurant ID</label>
                            <div class="col-md-4">
                                <input id="restaurantID" name="restaurantID" type="text"
                                       placeholder="Select Restaurant via ID" class="form-control input-md" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="delete_restaurant"></label>
                            <div class="col-md-1">
                                <button type="submit" value="delete_restaurant" id="delete_restaurant" name="delete_restaurant"
                                        class="btn btn-success">Delete Restaurant
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