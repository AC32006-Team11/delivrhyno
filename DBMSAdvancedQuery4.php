<?php include 'header.php'; ?>

<?php function advancedQuery4()
{

    include 'dbConnect.php';
    $type = $_GET["type"];
    $city = $_GET["city"];
    ?>
    <div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 style="text-align:center;">You have searched all restaurants in <?php echo "$city" ?> which do not serve
                the <?php echo "$type" ?> style of food</h2>
            <br>
        </div>
    </div>
    <div class="row">
    <div class="col-md-12">
    <table class="table table-striped table-bordered table-condensed" style="width:100%";>
    <thead>
    <tr>
        <th>Restaurant Name</th>
        <th>Restaurant Type</th>


    </tr>
    </thead>

    <?php
    if (!empty($city)) {
        $query = "SELECT restaurant_name, restaurant_description FROM restaurant
					WHERE restaurant_description not in (SELECT '$type' FROM restaurant) AND city='$city' ORDER BY restaurant_name ASC;";
        $result = mysqli_query($db, $query) or die(mysqli_error($db));
        while ($row = mysqli_fetch_array($result)) {
            echo '
                <tbody>
				
                    <td>' . $row[0] . '</td>
                    <td>' . $row[1] . '</td>
                    
                </tbody>';
        }
    }


}

if (isset($_GET["performquery"])) {
    advancedQuery4();


} ?>
    </tbody>
    </table>
    </div>
    </div>
    </div>

<?php include 'footer.php'; ?>