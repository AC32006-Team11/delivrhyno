<?php include 'header.php'; ?>
<?php include 'dbConnect.php'; ?>
<?php
//$sqlquery = "INSERT INTO craigwattdb.restaurant(restaurant_name, restaurant_description, street, county, city, post_code, contact_phone_region, contact_phone, delivery_time) VALUES ('Hong Kong','The finest Chinese food ever served','','','','','','','');";
//$sqlquery2 ="INSERT INTO craigwattdb.restaurant_menu_item(restaurant_id,menu_item_group,menu_item_name,menu_item_price) VALUES ('','','','');";
?>
    <div class="container">
        <div class="row">
            <div class="Jumbotron">
                <h2>Restaurant Selection</h2>
                <p></p>
            </div>
            <br/>
            <div class="row">
                <?php
                $isdelivered = 0;
                $ordercount = 1;
                do {
                    ?>
                    <div class="col-md-4 col-md-4">
                        <div class="thumbnail"
                            <?php
                            if($ordercount<2) {
                                ?>
                                style="background-color: palegreen"
                                <?php
                            }else{}
                            ?>
                        >
                            <img src="http://placehold.it/325x150" style="padding:15px;">
                            <div class="caption">
                                <h3>
                                    Restaurant <?php
                                    echo $ordercount;
                                    if($ordercount<2)
                                    {
                                        ?>
                                        <small>(Your Most Frequent Restaurant!)</small>
                                        <?php
                                    }else
                                    {
                                    }
                                    ?>
                                </h3>
                                <p> You ordered this meal from
                                    <?php

                                    ?>__
                                    on
                                    <?php
                                    $t = date(DATE_RSS);
                                    echo $t;
                                    ?>.
                                    What would you like to do?
                                </p>
                                <p>
                                    <a href="#" class="btn btn-primary" role="button">Review This Order</a>
                                    <a href="#" class="btn btn-default" role="button" style="float:right">
                                        <?php
                                        if ($isdelivered < 1) {
                                            echo "Cancel Order";
                                        } else {
                                            echo "Order Again";
                                        }
                                        ?></a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <?php
                    $ordercount++;
                    $isdelivered = 1;
                } while ($ordercount < 7);
                ?>
            </div>
        </div>
    </div>

<?php include 'footer.php'; ?>