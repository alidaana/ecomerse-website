<?php
    session_start();
    include('config/connection.php');
    $user_id = $_SESSION['user_id'];

    $product_id = $_GET['product_id'];
    
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
?>

<?php 
    if(isset($_SESSION['user_id']))
        include('includes/user_header.php');
    else
        include('includes/header.php');
?>


<div class="container mt-5 mb-5">
    <div class="card">
        <div class="row g-0">
            <div class="col-md-6 border-end">
                <div class="d-flex flex-column justify-content-center">
                    <div class="main_image"> <img src="images/<?php echo $product_image ?>" id="main_product_image" width="800"> </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="p-3 right-side">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3><?php echo $product_name?></h3> <span class="heart"><i class='bx bx-heart'></i></span>
                    </div>
                    <div class="mt-2 pr-3 content">
                        <h5> <b>Description: </b></h5>
                        <p><h5><?php echo $product_desc?></h5></p>
                    </div>
                    <h5> <b>Price: </b></h5>
                    <h3>$<?php echo $product_price?></h3>
                    <div class=""> 
                        <h5> <b>Quantity: </b></h5>
                        <div class="colors">
                            <h3><?php echo $product_qty?></h3>
                        </div>
                    </div>
                    <form action="php/buy.php" method="POST">
                        <div>
                            <input type="number" name="product_id" value="<?php echo $product_id?>" hidden>
                            <input type="number" name="user_id" value="<?php echo $user_id?>" hidden>
                            <label for="">Ammount:</label>
                            <input type="number" name="product_qty" min="1" max="<?php echo $product_qty?>" required>
                        </div>
                        <div class="buttons d-flex flex-row mt-2 gap-3">
                            <button type="submit" class="btn btn-primary text-center">Buy</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>




<?php include('includes/footer.php') ?>