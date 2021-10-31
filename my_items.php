<?php
    session_start();
    $user_id = $_SESSION['user_id'];
    include('config/connection.php');
    include('includes/user_header.php');

    $products = $conn->prepare('SELECT * FROM `products` WHERE `user_id`=?');
    $products->bind_param("i",$user_id);
    $products->execute();
    $result = $products->get_result();

?>
<header id="overview" >
    <div class="container py-5" >
        <h1>Items you have on sale</h1>
        <div class="row">
            
            <?php 
                while($products = $result-> fetch_assoc()){
                $product_id = $products['product_id'];
                $product_name = $products['product_name'];
                $product_desc = $products['product_desc'];
                $product_price= $products['product_price'];
                $product_image= $products['product_image'];
            ?>

                <div class="col-md-4  mt-5"> 
                    <div class="card mx-auto" style="width: 85%;" >
                        <img class="card-img-top" src="images/<?php echo $product_image ?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $product_name ?></h5>
                            <h3 class="card-title">$<?php echo $product_price ?></h3>
                            <a href="php/delete.php?product_id=<?php echo $product_id ?>" class="btn btn-danger">Delete Product</a>
                        </div>
                    </div>
                </div>

            <?php
                }
            ?>
        </div>
    </div>

    <div class="container py-5" >
        <h1>Items you have bought</h1>
        <div class="row">
            
            <?php 
            
                $products = $conn->prepare('SELECT * FROM `bought_products` WHERE `user_id`=?');
                $products->bind_param("i",$user_id);
                $products->execute();
                $result2 = $products->get_result();

                while($products = $result2-> fetch_assoc()){
                $product_id = $products['id'];
                $product_name = $products['bought_name'];
                $product_desc = $products['bought_desc'];
                $product_qty= $products['bought_qty'];
                $product_image= $products['bought_image'];
            ?>

                <div class="col-md-4  mt-5"> 
                    <div class="card mx-auto" style="width: 85%;" >
                        <img class="card-img-top" src="images/<?php echo $product_image ?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $product_name ?></h5>
                            <h3 class="card-title">Ammount: <?php echo $product_qty ?></h3>
                        </div>
                    </div>
                </div>

            <?php
                }
            ?>
        </div>
    </div>
</header>

<?php include('includes/footer.php');?>