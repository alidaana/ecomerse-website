<?php
    session_start();
    include('../config/connection.php');
    $user_id =$_SESSION['user_id'];

    $image = $_POST['product_image'];
    $name = $_POST['product_name'];
    $desc = $_POST['product_desc'];
    $price = $_POST['product_price'];
    $qty = $_POST['product_qty'];

    $x = $conn->prepare("INSERT INTO `products`(`product_name`, `product_desc`, `product_qty`, `product_price`, `product_image`, `user_id`) VALUES (?, ?, ?, ?, ?, ?)");
    $x->bind_param("ssiisi",$name,$desc,$qty,$price,$image,$user_id);
    $x->execute();

    header("Location:../sell_product.php");

?>