<?php
    include('includes/header.php');
?>
<link rel="stylesheet" href="css/create_account.css">

<section class="testimonial py-5" id="testimonial">
    <div class="container">
        <div class="row ">
            <div class="col-md-4 py-5 bg-primary text-white text-center ">
                <div class=" ">
                    <div class="card-body">
                        <img src="images/logo3.jpg" style="width:30%;border-radius:30px">
                        <h2 class="py-3">Login</h2>
                        <p>Please login to your account</p>
                    </div>
                </div>
            </div>
            <div class="col-md-8 py-5 border">
                <h4 class="pb-4">Please fill with your details</h4>
                <form method="POST" action="php/login.php">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                          <input name="email" type="email" class="form-control" id="email" placeholder="Email" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                          <input name="password" type="password" class="form-control" id="password" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <button type="submit" class="btn btn-danger">Login</button>
                    </div>
                </form>
                <label for="">Dont have an account?</label>
                <a href="creat_account.php">Create an Account</a>
            </div>
        </div>
    </div>
</section>

<script src="js/creat_account.js"></script>

<?php include('includes/footer.php') ?>