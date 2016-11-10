<?php include 'header.php'; ?>
<?php
if (isset($_SESSION["loggedIn"]) == "loggedIn") {
        $currentUsername = $_SESSION['username'];
        if ($stmt = $db->prepare("SELECT title, forename, surname, street, county, city, post_code, contact_phone_region, contact_phone, contact_email FROM customer WHERE username = ?")) {
            $stmt->bind_param("s", $currentUsername);
            $stmt->execute();
            $stmt->bind_result($title, $forename, $surname, $street, $county, $city, $post_code, $contact_phone_region, $contact_phone, $contact_email);
            while ($stmt->fetch()) {
                $_SESSION['title'] = $title;
                $_SESSION['forename'] = $forename;
                $_SESSION['surname'] = $surname;
                $_SESSION['street'] = $street;
                $_SESSION['county'] = $county;
                $_SESSION['city'] = $city;
                $_SESSION['post_code'] = $post_code;
                $_SESSION['contact_phone_region'] = $contact_phone_region;
                $_SESSION['contact_phone'] = $contact_phone;
                $_SESSION['contact_email'] = $contact_email;
            }
            $stmt->close();
        }
    ?>



<div class="container">
    <div class="col-md-4">
        <h2>Please enter the details you wish to update</h2>
        <br>
    </div>

    <form method="POST" action="userAccountUpdate.php" class="form-horizontal">
        <fieldset>
            <div class="form-group">
                <label class="col-md-3 control-label" for="contact_email">Contact Email</label>
                <div class="col-md-6">
                    <input id="contact_email" name="contact_email" type="email"
                           placeholder="contact email" <?php if($_SESSION['contact_email']!=null){echo 'value=' . $_SESSION['contact_email'] . '';} ?>
                           class="form-control input-md">
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 control-label" for="title">Title</label>
                <div class="col-md-6">
                    <input id="title" name="title" type="text" placeholder="title"
                        <?php if($_SESSION['title']!=null){echo 'value=' . $_SESSION['title'] . '';} ?>
                           class="form-control input-md">
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 control-label" for="forename">Forename</label>
                <div class="col-md-6">
                    <input id="forename" name="forename" type="text" placeholder="forename"
                        <?php if($_SESSION['forename']!=null){echo 'value=' . $_SESSION['forename'] . '';} ?>
                           class="form-control input-md">
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 control-label" for="surname">Surname</label>
                <div class="col-md-6">
                    <input id="surname" name="surname" type="text" placeholder="surname"
                        <?php if($_SESSION['surname']!=null){echo 'value=' . $_SESSION['surname'] . '';} ?>
                           class="form-control input-md">
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 control-label" for="street">Street</label>
                <div class="col-md-6">
                    <input id="street" name="street" type="text" placeholder="street"
                        <?php if($_SESSION['street']!=null){echo 'value=' . $_SESSION['street'] . '';} ?>
                           class="form-control input-md">
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 control-label" for="county">County</label>
                <div class="col-md-6">
                    <input id="county" name="county" type="text" placeholder="county"
                        <?php if($_SESSION['county']!=null){echo 'value=' . $_SESSION['county'] . '';} ?>
                           class="form-control input-md">
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 control-label" for="city">City</label>
                <div class="col-md-6">
                    <input id="city" name="city" type="text" placeholder="city"
                        <?php if($_SESSION['city']!=null){echo 'value=' . $_SESSION['city'] . '';} ?>
                           class="form-control input-md">
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 control-label" for="post_code">Post Code</label>
                <div class="col-md-6">
                    <input id="post_code" name="post_code" type="text" placeholder="post code"
                        <?php if($_SESSION['post_code']!=null){echo 'value=' . $_SESSION['post_code'] . '';} ?>
                           class="form-control input-md">
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 control-label" for="contact_phone_region">Contact Phone
                    Region</label>
                <div class="col-md-6">
                    <input id="contact_phone_region" name="contact_phone_region" type="text"
                           placeholder="contact phone region"
                        <?php if($_SESSION['contact_phone_region']!=null){echo 'value=' . $_SESSION['contact_phone_region'] . '';} ?>
                           class="form-control input-md">
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 control-label" for="contact_phone">Contact Phone</label>
                <div class="col-md-6">
                    <input id="contact_phone" name="contact_phone" type="text" placeholder="contact phone"
                        <?php if($_SESSION['contact_phone']!=null){echo 'value=' . $_SESSION['contact_phone'] . '';} ?>
                           class="form-control input-md">
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 control-label" for="Update Account"></label>
                <div class="col-md-1">
                    <button type="submit" value="UpdateAccount" id="UpdateAccount" name="UpdateAccount"
                            class="btn btn-success">Update Account
                    </button>
                </div>
            </div>
        </fieldset>
    </form>
    <?php } include 'footer.php'; ?>
