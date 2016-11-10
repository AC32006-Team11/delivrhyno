<?php include 'header.php'; ?>

<?php function advancedQuery2()
{

    include 'dbConnect.php';
    $food = $_GET["food"];
    $city = $_GET["city"];
    ?>
    <div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 style="text-align:center;">You have searched for all restaurants that have <?php echo "$food" ?> on
                their menu in <?php echo "$city" ?></h2>
            <br>
        </div>
    </div>
    <div class="row">
    <div class="col-md-12">
    <table class="table table-striped table-bordered table-condensed" style="width:100%";>
    <thead>
    <tr>
        <th>Restaraunt Name</th>
        <th>Price of Item</th>

    </tr>
    </thead>

    <?php
    if (!empty($city)) {
        $query = "SELECT restaurant_name, menu_item_price
					FROM restaurant r, restaurant_menu_item i
					WHERE menu_item_name = 'soup' AND city='dundee' AND r.restaurant_id=i.restaurant_id ORDER BY menu_item_price ASC;";
        $result = mysqli_query($db, $query) or die(mysqli_error($db));
        while ($row = mysqli_fetch_array($result)) {
            echo '
                <tbody>
				
                    <td>' . $row[0] . '</td>
                    <td>£' . $row[1] . '</td>
                    
                </tbody>';
        }
    }


}

if (isset($_GET["performquery"])) {
    advancedQuery2();


} ?>
    </tbody>
    </table>
    </div>
    </div>
    </div>

<?php include 'footer.php'; ?>