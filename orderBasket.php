<?php

session_start();

if(isset($_POST['removecart'])) {
    $unsetKey= $_POST['removecart'];
    unset($_SESSION['id'][$unsetKey]);
    unset($_SESSION['name'][$unsetKey]);
    unset($_SESSION['price'][$unsetKey]);
    $_SESSION['id'] = array_values($_SESSION['id']);
    $_SESSION['name'] = array_values($_SESSION['name']);
    $_SESSION['price'] = array_values($_SESSION['price']);
    exit();
}

if(isset($_POST['total_cart_items']))
{
    echo count($_SESSION['id']);
    exit();
}

if(isset($_POST['item_id']))
{
    $_SESSION['id'][]=$_POST['item_id'];
    $_SESSION['name'][]=$_POST['item_name'];
    $_SESSION['price'][]=$_POST['item_price'];
    echo count($_SESSION['name']);
    exit();
}

if(isset($_POST['showcart']))
{
    echo "<table class='table'><thead><tr><th>Item Name</th><th>Item price</th></tr></thead>";
    for($i=0;$i<count($_SESSION['id']);$i++)
    {
        echo "<tbody><tr>";
        echo "<td>".$_SESSION['name'][$i]."</td>";
        echo "<td>".$_SESSION['price'][$i]."</td>";
        echo "<td><button class='btn btn-primary' id='removecart$i' value='$i' onclick='removeCart($i)'>Delete Item</button></td></tr></tbody>";
        echo "</div>";
    }
    echo "<td><a href=\"orderPayment.php\">Submit your order</a></td></table>";
    exit();
}
?>