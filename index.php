<?php
    include('config/connection.php');
    include('includes/header.php');

    $products = $conn->prepare('SELECT * FROM `products`');
    $products->execute();
    $result = $products->get_result();

?>
<header id="overview" >
    <div class="container py-5" >
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
                            <a href="product.php?product_id=<?php echo $product_id ?>" class="btn btn-primary">View Product</a>
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