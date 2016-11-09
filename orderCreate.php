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
        </div>
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
                            $rrow = array('id'=>$id,'name'=>$name,'info'=>$info);
                            echo 'testtesttesttest'; ?>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="thumbnail">
                                        <img src="assets/restaurant1.jpg" style="padding:15px;">
                                        <div>
                                            <h3>
                                                <?php echo $rrow['id'];?>
                                                    <small>(Your Most frequent Restaurant!)</small>
                                            </h3>
                                            <p>
                                                <?php echo $rrow['name']; ?>
                                                <?php echo $rrow['info']; ?>
                                            </p>
                                            <p>
                                                <?php echo '<a href="orderSelection.php?r=' . $rrow['id'] . '">Order Here</a>'?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php }
                        $stmt->close();
                    }
                }
            ?>
    </div>
<?php include 'footer.php'; ?>