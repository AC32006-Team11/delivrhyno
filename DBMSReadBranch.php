<?php function ReadBranch()
{

    include 'dbConnect.php';
    $query = "SELECT * FROM branch";
    $result = $db -> query($query);
    $n = 1000;
    if($n > 0) {
        echo "<thead><tr><th>ID</th>
              <th>Street</th><th>County</th><th>City</th><th>Postcode</th><th>Contact Phone Region</th>
              <th>Phone Number</th></tr></thead>";
        while($row=$result->fetch_assoc()){
            echo "<tbody><td>".$row["branch_id"]."</td><td>".$row["street"]."</td><td>".$row["county"]."</td><td>".$row["city"]."</td><td>".$row["post_code"].
                "</td><td>".$row["contact_phone_region"]."</td><td>".$row["contact_phone"]."</td></tbody>";
        }
    }
}
?>

<?php ReadBranch(); ?>
