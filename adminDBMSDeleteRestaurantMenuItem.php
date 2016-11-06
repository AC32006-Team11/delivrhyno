<?php include 'header.php'; ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <form name="Register" method="POST" action="DBMSDeleteRestaurantMenuItem.php" class="form-horizontal">
                    <fieldset>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="restaurantID">Restaurant ID</label>
                            <div class="col-md-4">
                                <input id="restaurantID" name="restaurantID" type="text"
                                       placeholder="Select Restaurant via ID" class="form-control input-md" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="menuItemID">Menu Item ID</label>
                            <div class="col-md-4">
                                <input id="menuItemID" name="menuItemID" type="text"
                                       placeholder="Select Menu Item via ID" class="form-control input-md" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="delete_menu_item"></label>
                            <div class="col-md-1">
                                <button type="submit" value="delete_menu_item" id="delete_menu_item" name="delete_menu_item"
                                        class="btn btn-success">Delete Menu Item
                                </button>
                            </div>
                        </div>

                    </fieldset>
                </form>
            </div>
            <div class="col-md-1"></div>
        </div>

<?php include 'footer.php'; ?>