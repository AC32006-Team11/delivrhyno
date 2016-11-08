<?php include 'header.php'; ?>
<?php
if ( isset($_SESSION['restaurantID'])){
    clearBasket();
    }

?>

<?php
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
    $rresult = mysqli_query($db, $sqlQueryRest) or die(mysqli_error($db));
    $rcount = mysqli_num_rows($rresult);
}
?>




<div class="container">
    <div class="row">
        <div class="col-md-10">
            <?php function clearBasket() {
                unset($_SESSION['id']);
                unset($_SESSION['name']);
                unset($_SESSION['price']);

                echo '<h4>Reset your basket as naviagated to a new page</h4>'; } ?>
        </div>
    </div>
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