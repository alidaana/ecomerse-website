<?php

  include('../config/connection.php');

  $product_id = $_GET['product_id'];

    $x = $conn->prepare("DELETE FROM `products` WHERE `product_id`=?");
    $x->bind_param("i",$product_id);
    $x->execute();
    header("Location:../my_items.php");
?>