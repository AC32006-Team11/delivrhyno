<?php include 'header.php'; ?>
<?php include 'dbConnect.php'; ?>

<?php
if (isset($_SESSION["loggedIn"]) == "loggedIn") {
$query = "SELECT * FROM `customer` WHERE '$_SESSION[username]' = username";
$result = mysqli_query($db, $query) or die(mysqli_error($db));

$row = mysqli_fetch_array($result);

$count = mysqli_num_rows($result);
if ($count == 1) {
    $_SESSION['city'] = $row[6];
    }
} ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php
            if (!empty($_SESSION["city"])) {
                $query = "SELECT * FROM `restaurant` WHERE '$_SESSION[city]' = city";
                $result = mysqli_query($db, $query) or die(mysqli_error($db));

                echo '<h3>Restaurants near you</h3>';

                while($row = mysqli_fetch_array($result)){


                    echo '<table class="table">
                            <tr>
                                <th>'.$row[1].'</th>
                                <th>'.$row[2].'</th>
                                <th><a href="orderSelection.php?r='.$row[0].'">Order Here</a></th>
                            </tr>';
                }
                echo '</table>';
            }
            ?>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
