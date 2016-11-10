<?php include 'header.php';?>
<?php
//test
$randomR = rand(1,3);
$randomR2 = rand(1,3);
while($randomR2 == $randomR){
    $randomR = rand(1,3);
    $randomR2 = rand(1,3);
}
if (isset($_SESSION["loggedIn"]) == "loggedIn") {
    $query = "SELECT * FROM `customerview` WHERE '$_SESSION[username]' = username";
    $result = mysqli_query($db, $query) or die(mysqli_error($db));

    $row = mysqli_fetch_array($result);

    $count = mysqli_num_rows($result);
    if ($count == 1) {
        $_SESSION['city'] = $row[6];
    }
}
if(!empty($_SESSION["city"])) {
    $sqlQueryRest = "SELECT * FROM `restaurantview` WHERE '$_SESSION[city]' = city ";
    //$query = "SELECT * FROM `customer` WHERE '$_SESSION[username]' = username";
    $rresult = mysqli_query($db, $sqlQueryRest) or die(mysqli_error($db));
    $rcount = mysqli_num_rows($rresult);
    }
?>
<div class="container1">

        <div id="content-slider">
            <h1 style="text-align: center;">Featured Restaurants</h1>
            <div id="slider">
                <div id="mask">
                    <ul>
                        <li id="first" class="firstanimation">
                            <?php if (isset($_SESSION["loggedIn"]) == "loggedIn") {
                                echo '<a href="orderSelection.php?r=' . $randomR . '"><img src="assets/restaurant1.jpg" alt="Restaurant 1"/></a>
                            <div id="tooltip" class="tool1"></div>';
                            }else{
                                echo '<a href="uLogin.php"><img src="assets/restaurant1.jpg" alt="Restaurant 1"/></a>
                            <div id="tooltip" class="tool1"></div>';
                            }
                            ?>
                            }
                            <!--<a href="orderSelection.php?r=1"><img src="assets/restaurant1.jpg" alt="Restaurant 1"/></a>
                            <div id="tooltip" class="tool1"></div>-->
                        </li>
                        <li id="second" class="secondanimation">
                            <?php if (isset($_SESSION["loggedIn"]) == "loggedIn") {
                                echo '<a href="orderSelection.php?r=' . $randomR2 . '"><img src="assets/restaurant2.jpg" alt="Restaurant 2"/></a>
                            <div id="tooltip" class="tool2"></div>';
                            }else{
                                echo '<a href="uLogin.php"><img src="assets/restaurant2.jpg" alt="Restaurant 2"/></a>
                            <div id="tooltip" class="tool2"></div>';
                            }
                            ?>
                            <!--<a href="orderSelection.phpr=2"><img src="assets/restaurant2.jpg" alt="Restaurant 2"/></a>
                            <div id="tooltip" class="tool2"></div>-->
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php';?>