<?php include 'header.php'; ?>
<?php

if (isset($_SESSION["admLoggedIn"]) == "admLoggedIn") { ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <form name="Register" method="POST" action="DBMSUpdateRestaurantMenuItem.php" class="form-horizontal">
                    <fieldset>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="restaurant_id">Restaurant ID</label>
                            <div class="col-md-4">
                                <input id="restaurant_id" name="restaurant_id" type="text"
                                       placeholder="Select Restaurant via ID" class="form-control input-md" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="restaurant_menu_item_id">Item ID</label>
                            <div class="col-md-4">
                                <input id="restaurant_menu_item_id" name="restaurant_menu_item_id" type="text"
                                       placeholder="Select Item via ID" class="form-control input-md" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="menu_item_group">Menu Item Group</label>
                            <div class="col-md-4">
                                <input id="menu_item_group" name="menu_item_group" type="text"
                                       placeholder="Starters | Mains | Desert" class="form-control input-md">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="menu_item_name">Menu Item Name</label>
                            <div class="col-md-4">
                                <input id="menu_item_name" name="menu_item_name" type="text"
                                       placeholder="Chicken" class="form-control input-md">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="menu_item_price">Menu Item Price</label>
                            <div class="col-md-4">
                                <input id="menu_item_price" name="menu_item_price" type="text"
                                       placeholder="7.5" class="form-control input-md">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="update_restaurant_menu_item"></label>
                            <div class="col-md-1">
                                <button type="submit" value="update_restaurant_menu_item" id="update_restaurant_menu_item" name="update_restaurant_menu_item"
                                        class="btn btn-success">Update Restaurant Menu Item
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