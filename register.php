<?php include 'header.php';?>

    <div class="container-fluid">
        <form method="POST"  action="" class="form-horizontal">
            <fieldset>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="username">username</label>
                    <div class="col-md-4">
                        <input pattern=".{5,12}" id="username" name="username" type="text" placeholder="username" class="form-control input-md" required title="username must be between 5 to 12 characters long">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label" for="password">password</label>
                    <div class="col-md-4">
                        <input pattern=".{8,16}" id="password" name="password" type="password" placeholder="password" class="form-control input-md" required title="password must be between 8 to 16 characters long">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label" for="register"></label>
                    <div class="col-md-1">
                        <button type="submit" value="Register" id="register" name="register" class="btn btn-success">Register</button>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>

<?php include 'footer.php';?>