
<?php function ReadRestaurant()
{

    include 'dbConnect.php';
    $query = "SELECT * FROM Restaurant";
    $result = $db -> query($query);
    $n = 1000;
    if($n > 0) {
        echo "<thead><tr><th>ID</th><th>Restaurant Name</th>
              <th>Restaurant Description</th><th>Street</th><th>County</th><th>City</th>
              <th>Postcode</th><th>Contact Phone Region</th><th>Phone Number</th><th>Phone Number</th><th>Delivery Time</th>
              </tr></thead>";
        while($row=$result->fetch_assoc()){
            echo "<tbody><td>".$row["restaurant_id"]."</td><td>".$row["restaurant_name"].
                "</td><td>".$row["restaurant_description"]."</td><td>".$row["street"]."</td><td>".$row["county"].
                "</td><td>".$row["city"].
                "</td><td>".$row["post_code"]."</td><td>".$row["contact_phone_region"]."</td><td>".$row["contact_phone"].
                "</td><td>".$row["contact_phone_region"].
                "</td><td>".$row["delivery_time"]."</td></tbody>";
        }
    }
}
?>

<?php ReadRestaurant(); ?>
