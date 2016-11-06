<link rel="stylesheet/less" type="text/css" href="css/styles.less"/>
<?php include 'header.php'; ?>
<?php include 'dbConnect.php'; ?>
<?php
//$sqlquery = "INSERT INTO craigwattdb.restaurant(restaurant_name, restaurant_description, street, county, city, post_code, contact_phone_region, contact_phone, delivery_time) VALUES ('Hong Kong','The finest Chinese food ever served','','','','','','','');";

//$sqlquery2 ="INSERT INTO craigwattdb.restaurant_menu_item(restaurant_id,menu_item_group,menu_item_name,menu_item_price) VALUES ('','','','');"; 

//$sqlGetRestName
//$sqlGetRestInfo = "SELECT FROM craigwattdb.restaurant"
//$result = mysqli_query($db, $sqlquery) or die(mysqli_error($db));
//$result = mysqli_query($db, $sqlquery) or die(mysqli_error($db));
//hellloooooooo
//if session = city
//were session variable is = to city
//
if (isset($_SESSION["loggedIn"]) == "loggedIn") {
    $query = "SELECT * FROM `customer` WHERE '$_SESSION[username]' = username";
    $result = mysqli_query($db, $query) or die(mysqli_error($db));

    $row = mysqli_fetch_array($result);

    $count = mysqli_num_rows($result);
    if ($count == 1) {
        $_SESSION['city'] = $row[6];
    }
}

if(!empty($_SESSION["city"])) {
    $sqlQueryRest = "SELECT * FROM `restaurant` WHERE '$_SESSION[city]' = city ";
    //$query = "SELECT * FROM `customer` WHERE '$_SESSION[username]' = username";
    $rresult = mysqli_query($db, $sqlQueryRest) or die(mysqli_error($db));
    $rcount = mysqli_num_rows($rresult);
    //while($rrow = mysqli_fetch_array($rresult)){
    //    $menuNames = array();
    //    array_push($menuNames, $rrow[1]);
    //}
    //$_SESSION['restaurantNames'] = $menuNames;
}

?>


<div class="container">
    <div class="row">
        <div class="Jumbotron">
            <h2>Welcome to delivrhyno.  Your region: <?php echo $_SESSION['city'] ?></h2>
            <p></p>
        </div>
        <br/>
        <div class="row">
            <?php
            $isdelivered = 0; //boolean 1 or zero value for whether an order is complete, 1 for yes, 0 for no
            //will change to pull from database when setup
            $ordercount = 1; //counts which order it currently is, starting from 1
            //will change to pull from database when setup
            while($rrow = mysqli_fetch_array($rresult)){
                ?>
                <div class="col-md-6 col-md-6">
                    <div class="thumbnail"
                        <?php
                        if ($ordercount < 2) {
                            ?>

                            <?php //style="background-color: palegreen" above ^^
                        } else {
                        }
                        ?>
                    >
                        <img src="assets/restaurant1.jpg" style="padding:15px;">
                        <div >
                            <h3>
                                <?php
                                //^^class = caption in div
                                echo $ordercount;
                                echo $rrow[1];
                                if ($ordercount < 2) {
                                    ?>
                                    <small>(Your Most frequent Restaurant!)</small>
                                    <?php
                                } else {
                                }
                                ?>
                            </h3>
                            <p>
                                <?php echo $rrow[2]; ?>
                            </p>
                            <p>
                                <?php echo '<a href="orderSelection.php?r='.$rrow[0].'">Order Here</a>'?>
                            </p>
                        </div>
                    </div>
                </div>
                <?php
                $ordercount++;
                $isdelivered = 1;
            }
            ?>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>