<?php

session_start();

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
for($i=0;$i<count($_SESSION['id']);$i++)
{
echo "<div class='cart_items'>";
    echo "<b>".$_SESSION['id'][$i]."</b>";
    echo "<b>".$_SESSION['name'][$i]."</b>";
    echo "<b>".$_SESSION['price'][$i]."</b>";
    echo "</div>";
}
exit();
}
?>