<?php
    // include('config/connection.php');
    include('includes/user_header.php');

?>
<link rel="stylesheet" href="css/create_account.css">

<section class="testimonial py-5" id="testimonial">
    <div class="container">
        <div class="row ">
            <div class="col-md-4 py-5 bg-primary text-white text-center ">
                <div class=" ">
                    <div class="card-body">
                        <img src="images/logo3.jpg" style="width:30%;border-radius:30px">
                        <h2 class="py-3">Upload a Product to Sell</h2>
                        <p>Start making money today !!</p>
                    </div>
                </div>
            </div>
            <div class="col-md-8 py-5 border">
                <h4 class="pb-4">Please enter product details</h4>
                <form method="POST" action="php/upload_product.php">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                          <input id="name" name="product_name" placeholder="Product name" class="form-control" type="text" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <textarea name="product_desc" cols="40" rows="5" placeholder="Description..." required></textarea>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                          <input type="number" name="product_price" class="form-control" id="price" placeholder="Price($1 upto $5000)" min="1" max="5000" required>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="number" name="product_qty" class="form-control" id="qty" placeholder="Quantity(1 upto 5)" min="1" max="5" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <label for="img">Select image: </label>
                        <input type="file" id="img" name="product_image" accept="image/*" required>
                    </div>
                    
                    <div class="form-row">
                        <button type="submit" class="btn btn-danger">Upload Product</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


<script src="js/upload_product.js"></script>
<?php include('includes/footer.php') ?>