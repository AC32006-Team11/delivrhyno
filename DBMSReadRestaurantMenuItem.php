
<?php function ReadRestaurantMenuItem()
{

    include 'dbConnect.php';
    $query = "SELECT * FROM restaurant_menu_item";
    $result = $db -> query($query);
    $n = 1000;
    if($n > 0) {
        echo "<thead><tr><th>Menu Item Group</th>
              <th>Item Name</th><th>Item Price</th></tr></thead>";
        while($row=$result->fetch_assoc()){
            echo "<tbody><td>".$row["menu_item_group"].
                "</td><td>".$row["menu_item_name"]."</td><td>".$row["menu_item_price"]."</td></tbody>";
        }
    }
}
?>

<?php ReadRestaurantMenuItem(); ?>
