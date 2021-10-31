<?php
    include('../config/connection.php');

    $user_id = $_POST['user_id'];

          
    $product_id = $_POST['product_id'];

    $buy_qty = $_POST['product_qty'];

    
    $x = $conn->prepare("SELECT * FROM `products` WHERE product_id=?");
    $x->bind_param("i",$product_id);
    $x->execute();
    $result = $x->get_result();
    $products = $result-> fetch_assoc();

    $product_name = $products['product_name'];
    $product_desc = $products['product_desc'];
    $product_qty = $products['product_qty'];
    $product_price= $products['product_price'];
    $product_image= $products['product_image'];


    $x = $conn->prepare("INSERT INTO `bought_products`(`bought_name`, `bought_desc`, `bought_qty`, `bought_price`, `bought_image`, `user_id`) VALUES (?,?,?,?,?,?)");
    $x->bind_param("ssiisi",$product_name,$product_desc,$buy_qty,$product_price,$product_image,$user_id);
    $x->execute();

    $new_qty =  $product_qty - $buy_qty;

        
    if($new_qty == 0)
    {
        $x = $conn->prepare("DELETE FROM `products` WHERE `product_id`=?");
        $x->bind_param("i",$product_id);
        $x->execute();
        header("Location:../my_items.php");
    }
    else{
        $x = $conn->prepare("UPDATE `products` SET `product_qty`=? WHERE `product_id`=?");
        $x->bind_param("ii",$new_qty,$product_id);
        $x->execute();
        header("Location:../my_items.php");
    }







?>