<?php include 'header.php'; ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <form name="Register" method="POST" action="DBMSCreateRestaurantMenuItems.php" class="form-horizontal">
                    <fieldset>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="restaurantID">Restaurant ID</label>
                            <div class="col-md-4">
                                <input id="restaurantID" name="restaurantID" type="text"
                                       placeholder="Restaurant ID" class="form-control input-md" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="menu_item_group">Menu Item Group</label>
                            <div class="col-md-4">
                                <input id="menu_item_group" name="menu_item_group" type="text"
                                       placeholder="Menu Item Group" class="form-control input-md" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="menu_item_name">Menu Item Name</label>
                            <div class="col-md-4">
                                <input id="menu_item_name" name="menu_item_name" type="text"
                                       placeholder="Menu Item Name" class="form-control input-md" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="menu_item_price">Menu Item Price</label>
                            <div class="col-md-4">
                                <input id="menu_item_price" name="menu_item_price" type="text"
                                       placeholder="Menu Item Price" class="form-control input-md" required>
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
    </div>

<?php include 'footer.php'; ?>