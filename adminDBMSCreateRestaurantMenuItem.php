<?php include 'header.php'; ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <form name="Register" method="POST" action="DBMSCreateRestaurantMenuItem.php" class="form-horizontal">
                    <fieldset>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="restaurantID">Restaurant ID</label>
                            <div class="col-md-4">
                                <input id="restaurantID" name="restaurantID" type="text"
                                       placeholder="Select a restaurant via ID" class="form-control input-md" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="menu_item_group">Menu Item Group</label>
                            <div class="col-md-4">
                                <input id="menu_item_group" name="menu_item_group" type="text"
                                       placeholder="Starter | Main | Desert" class="form-control input-md" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="menu_item_name">Menu Item Name</label>
                            <div class="col-md-4">
                                <input id="menu_item_name" name="menu_item_name" type="text"
                                       placeholder="Plain Burger" class="form-control input-md" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="menu_item_price">Menu Item Price</label>
                            <div class="col-md-4">
                                <input id="menu_item_price" name="menu_item_price" type="text"
                                       placeholder="10.95" class="form-control input-md" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="create_restaurant_menu_item"></label>
                            <div class="col-md-1">
                                <button type="submit" value="create_restaurant_menu_item" id="create_restaurant_menu_item" name="create_restaurant_menu_item"
                                        class="btn btn-success">Create Restaurant Menu Item
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