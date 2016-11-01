<?php include 'header.php'; ?>

    <div class="container">
        <div class="row">
            <div class="Jumbotron">
                <h2>Welcome to delivrhyno</h2>
                <p>Basket</p>
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
                                    Order <?php
                                    echo $ordercount;
                                    if($ordercount<2)
                                    {
                                        ?>
                                        <small>(Your Most Recent Order!)</small>
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