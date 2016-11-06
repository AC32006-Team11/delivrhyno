<?php

session_start();

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
    echo "<p>".$_SESSION['id'][$i]."</p>";
    echo "<p>".$_SESSION['name'][$i]."</p>";
    echo "<p>".$_SESSION['price'][$i]."</p>";
    echo "</div>";
}
exit();
}
?>