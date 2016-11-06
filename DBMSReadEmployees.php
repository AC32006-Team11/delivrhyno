
<?php function ReadEmployees()
{

    include 'dbConnect.php';
    $query = "SELECT * FROM employee";
    $result = $db -> query($query);
    $n = 1000;
    if($n > 0) {
        echo "<thead><tr><th>Role</th>
              <th>Title</th><th>Forename</th><th>Surname</th><th></th>Street</th>
              <th>County</th><th>City</th><th>Postcode</th><th>Phone Number</th><th>Phone Number Region</th>
              <th>Email Address</th>
              <th>Holiday Entitlement</th></tr></thead>";
        while($row=$result->fetch_assoc()){
            echo "<tbody><td>".$row["role"].
                 "</td><td>".$row["title"]."</td><td>".$row["forename"]."</td><td>".$row["surname"]."</td><td>".$row["street"].
                 "</td><td>".$row["county"]."</td><td>".$row["city"]."</td><td>".$row["post_code"]."</td><td>".$row["contact_phone_region"].
                 "</td><td>".$row["contact_phone"]."</td><td>".$row["contact_email"]."</td><td>".$row["holiday_entitlement"]."</td></tbody>";
        }
    }
}
?>

<?php ReadEmployees(); ?>
