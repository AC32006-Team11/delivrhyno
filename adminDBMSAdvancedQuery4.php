<?php include 'header.php'; ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h2 style="text-align:center;">Search for restaurants that do not serve a specific style of food in a
                    city</h2>
                <br>
            </div>
        </div>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <form name="Search" method="GET" action="DBMSAdvancedQuery4.php" class="form-horizontal">
                    <fieldset>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="type">Restaurant Type</label>
                            <div class="col-md-4">
                                <input id="type" name="type" type="text" placeholder="e.g. Burgers"
                                       class="form-control input-md"
                                       required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="city">City</label>
                            <div class="col-md-4">
                                <input id="city" name="city" type="text" placeholder="e.g. Dundee"
                                       class="form-control input-md"
                                       required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="performquery"></label>
                            <div class="col-md-1">
                                <button type="submit" value="advanced" id="performquery" name="performquery"
                                        class="btn btn-success">Search
                                </button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class="col-md-1"></div>
        </div>

<?php include 'footer.php'; ?>