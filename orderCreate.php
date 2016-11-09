<?php include 'header.php'; ?>
<?php
if ( isset($_SESSION['restaurantID'])){
    clearBasket();
    }
?>

<?php
if (isset($_SESSION["loggedIn"]) == "loggedIn") {
    $currentUsername = $_SESSION['username'];
    if ($stmt = $db->prepare("SELECT city FROM customer WHERE username = ?")) {
        $stmt->bind_param("s", $currentUsername);
        $stmt->execute();
        $stmt->bind_result($city);
        while ($stmt->fetch()) {
            $_SESSION['city'] = $city;
        }
        $stmt->close();
    }
}
?>
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <?php function clearBasket()
                {
                    unset($_SESSION['id']);
                    unset($_SESSION['name']);
                    unset($_SESSION['price']);

                    echo '<h4>Reset your basket as naviagated to a new page</h4>';
                } ?>
            </div>
        </div>
        <div class="row">
            <div class="Jumbotron">

                <h2>Welcome to delivrhyno. Your region: <?php echo $_SESSION['city'] ?></h2>
                <p></p>
            </div>
            <br/>
            <?php
            echo 'helloothere';
            if(!empty($_SESSION["city"])) {
                $currentCity = $_SESSION['city'];
                echo 'test2';
                if ($stmt = $db->prepare("SELECT restaurant_id, restaurant_name, restaurant_description  FROM restaurant WHERE city = ?")) {
                    //SELECT * FROM `customer` WHERE '$_SESSION[username]' = username
                    echo 'test3';
                    $stmt->bind_param("s", $currentCity);
                    $result = $stmt->execute();
                    echo 'helloobye';
                    $stmt->bind_result($id, $name, $info);
                    $stmt->store_result();
                    $rrow = array();
                        while ($stmt->fetch()) {
                            // Because $name and $countryCode are passed by reference, their value
                            // changes on every iteration to reflect the current row;
                            $rrow = array('id'=>$id,'name'=>$name,'info'=>$info);
                            echo 'testtesttesttest'; ?>

                            <div class="row">
                                <div class="col-md-6 col-md-6">
                                    <div class="thumbnail"

                                        <?php //style="background-color: palegreen" above ^^
                                        ?>
                                    >
                                        <img src="assets/restaurant1.jpg" style="padding:15px;">
                                        <div>
                                            <h3>
                                                <?php
                                                //^^class = caption in div
                                                //echo $ordercount;
                                                echo $rrow['id'];
                                                //if ($ordercount < 2) {
                                                    ?>
                                                    <small>(Your Most frequent Restaurant!)</small>
                                                    <?php
                                                //} else {
                                                //}
                                                ?>
                                            </h3>
                                            <p>
                                                <?php echo $rrow['name']; ?>
                                                <?php echo $rrow['info']; ?>
                                            </p>
                                            <p>
                                                <?php echo '<a href="orderSelection.php?r=' . $rrow['id'] . '">Order Here</a>' ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <?php

                                ?>
                            </div>
                            </div>
                            </div>



                        <?php }
                        $stmt->close();
                    }
                }
            //$sqlQueryRest = "SELECT * FROM `restaurant` WHERE '$_SESSION[city]' = city ";
            //$sqlQueryRest = "SELECT * FROM `restaurant` WHERE '$_SESSION[city]' = city ";
            //$rresult = mysqli_query($db, $sqlQueryRest) or die(mysqli_error($db));
            //$rcount = mysqli_num_rows($rresult);
            //}
            ?>



<?php include 'footer.php'; ?>