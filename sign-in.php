<?php require "frontendheader.php" ?>

<div class="container" id="showitme">
    <div class="row">
        <div class="breadcrumb">
            <div class="container">
                <div class="breadcrumb-inner">
                    <ul class="list-inline list-unstyled">
                        <li><a href="home.html">Home</a></li>
                        <li class='active'>Login</li>
                    </ul>
                </div><!-- /.breadcrumb-inner -->
            </div><!-- /.container -->
        </div><!-- /.breadcrumb -->

        <div class="body-content">
            <div class="container my-5">

                <div class="sign-in-page">

                    <?php
                    if (isset($_SESSION['resuccess'])) {
                    ?>
                        <div class="alert alert-success text-center">
                            <h3>Create Account Successful</h3>
                            <p><?= $_SESSION['resuccess'] ?></p>
                        </div>
                    <?php }
                    unset($_SESSION['resuccess']); ?>

                    <?php
                    if (isset($_SESSION['fail'])) {
                    ?>
                        <div class="alert alert-warning text-center">
                            <h3><?= $_SESSION['fail'] ?></h3>
                        </div>
                    <?php }
                    unset($_SESSION['fail']); ?>

                    <?php
                    if (isset($_SESSION['loginfail'])) {
                    ?>
                        <div class="alert alert-danger text-center">
                            <h3><?= $_SESSION['loginfail'] ?></h3>
                        </div>
                    <?php }
                    unset($_SESSION['loginfail']); ?>

                    <div class="row">
                        <!-- Sign-in -->
                        <div class="col-md-6 col-sm-6 sign-in">
                            <h4 class="">Login</h4>

                            <form class="register-form outer-top-xs" role="form" action="loginmethod.php" method="POST">
                                <div class="form-group">
                                    <label class="info-title" for="email">Email Address <span>*</span></label>
                                    <input type="email" class="form-control unicase-form-control text-input" id="email" placeholder="@gmail.com" name='lemail'>
                                </div>
                                <div class="form-group">
                                    <label class="info-title" for="password">Password <span>*</span></label>
                                    <input type="password" class="form-control unicase-form-control text-input" id="password" placeholder="Enter your password" name="lpassword">
                                </div>

                                <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Login</button>
                            </form>
                        </div>
                        <!-- Sign-in -->

                        <!-- create a new account -->
                        <div class="col-md-6 col-sm-6 create-new-account">
                            <h4 class="checkout-subtitle">Create a new account</h4>

                            <form class="register-form outer-top-xs" role="form" enctype="multipart/form-data" action="register.php" method="POST">
                                <div class="form-group">
                                    <label class="info-title" for="cemail">Email Address <span>*</span></label>
                                    <input type="email" class="form-control unicase-form-control text-input" id="cemail" name="cemail">
                                </div>
                                <div class="form-group">
                                    <label class="info-title" for="cname">Name <span>*</span></label>
                                    <input type="text" class="form-control unicase-form-control text-input" id="cname" name="cname">
                                </div>
                                <div class="form-group">
                                    <label class="info-title" for="cphone">Phone Number <span>*</span></label>
                                    <input type="text" class="form-control unicase-form-control text-input" id="cphone" name="cphone">
                                </div>
                                <div class="form-group">
                                    <label class="info-title" for="cpassword">Password <span>*</span></label>
                                    <input type="text" class="form-control unicase-form-control text-input" id="cpassword" name="cpassword">
                                </div>
                                <div class="form-group">
                                    <label class="info-title" for="confirmpassword">Confirm Password <span>*</span></label>
                                    <input type="text" class="form-control unicase-form-control text-input" id="confirmpassword" name="confirmpassword">
                                </div>
                                <div class="form-group">
                                    <label class="info-title" for="address">Address <span>*</span></label>
                                    <textarea type="text" class="form-control unicase-form-control text-input" id="caddress" name="caddress"> </textarea>
                                </div>
                                <div class="form-group">
                                    <label class="info-title" for="userphoto">Profile <span>*</span></label>
                                    <input type="file" class="form-control unicase-form-control text-input" id="userphoto" name="userphoto">
                                </div>
                                <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Create Account</button>
                            </form>


                        </div>
                        <!-- create a new account -->
                    </div><!-- /.row -->
                </div><!-- /.sigin-in-->

            </div><!-- /.container -->
        </div><!-- /.body-content -->
    </div>
</div>

<?php require "frontendfooter.php" ?>