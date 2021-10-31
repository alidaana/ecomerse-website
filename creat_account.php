<?php
    session_start();
    
    include('includes/header.php');
    session_destroy();
?>
<link rel="stylesheet" href="css/create_account.css">

<section class="testimonial py-5" id="testimonial">
    <div class="container">
        <div class="row ">
            <div class="col-md-4 py-5 bg-primary text-white text-center ">
                <div class=" ">
                    <div class="card-body">
                        <img src="images/logo3.jpg" style="width:30%;border-radius:30px">
                        <h2 class="py-3">Registration</h2>
                        <p>Creat your account and dive into a new world of possibilities!!</p>
                    </div>
                </div>
            </div>
            <div class="col-md-8 py-5 border">
                <h4 class="pb-4">Please fill with your details</h4>
                <form method="POST" action="php/add_user.php">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                          <input id="name" name="name" placeholder="Full Name" class="form-control" type="text" required>
                        </div>
                        <div class="form-group col-md-6">
                          <input name="email" type="email" class="form-control" id="email" placeholder="Email" required>
                        </div>
                    </div>
                    <label for="" id="match" hidden></label>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                          <input name="password" type="password" class="form-control" id="password" placeholder="Password" required>
                        </div>
                        <div class="form-group col-md-6">
                          <input name="confirm_password" type="password" class="form-control" id="confirm_password" placeholder="Confirm Password" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <div class="form-group">
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                                  <label class="form-check-label" for="invalidCheck2">
                                    <small>By clicking Submit, you agree to our Terms & Conditions, Visitor Agreement and Privacy Policy.</small>
                                  </label>
                                </div>
                              </div>
                    
                          </div>
                    </div>
                    
                    <div class="form-row">
                        <button type="submit" class="btn btn-danger">Creat Account</button>
                    </div>
                </form>
                <label for="">Already have an account?</label>
                <a href="login_page.php">Login</a>
            </div>
        </div>
    </div>
</section>

<script src="js/creat_account.js"></script>

<?php include('includes/footer.php') ?>