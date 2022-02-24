<?php
require "frontendheader.php";
require 'dbconnected.php';

$userid = $_SESSION['login_user']['id'];

$sql = "SELECT * FROM orders WHERE user_id=:userid ORDER BY orderdate DESC";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':userid', $userid);
$stmt->execute();

$orders = $stmt->fetchAll();
?>


<div class="body-content outer-top-xs">
    <div class="jumbotron text-center">

        <h1 class="display-4">Your Order History</h1>

    </div><!-- /.container -->
</div><!-- /.body-content -->
<div class="body-content outer-top-xs">
    <div class="container">
        <div class="row ">
            <?php
            foreach ($orders as $order) {
                $id = $order['id'];
                $orderdate = $order['orderdate'];
                $voucherno = $order['voucherno'];
                $total = $order['total'];
                $notes = $order['notes'];
                $status = $order['status'];
            ?>
                <div class="shopping-cart col-lg-4 col-md-6 col-sm-12 col-12 p-4 ">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title"><?= $voucherno ?></h5>
                            <h6 class="card-subtitle mb-2 text-muted"><?= $orderdate ?></h6>
                            <p class="card-text text-white">
                                <?php if ($status == 'Orders') { ?>
                                    <button class="btn btn-warning">
                                        <span class=""><?= $status; ?></span>
                                    </button>

                                <?php } elseif ($status == 'Confirm') { ?>
                                    <button class="btn btn-success">
                                        <span class=""><?= $status; ?></span>
                                    </button>
                                <?php } else { ?>
                                    <button class="btn btn-danger">
                                        <span class=""><?= $status; ?></span>
                                    </button>
                                <?php } ?>
                            </p>

                        </div>
                    </div>
                </div><!-- /.shopping-cart -->
            <?php } ?>
        </div> <!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.body-content -->
<!-- ==============================================It is not useful BRANDS CAROUSEL ============================================== -->
<div id="brands-carousel" class="logo-slider wow fadeInUp">

    <div class="logo-slider-inner">
        <div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">
            <div class="item m-t-15">
                <a href="#" class="image">
                    <img data-echo="assets/images/brands/brand1.png" src="assets/images/blank.gif" alt="">
                </a>
            </div>
            <!--/.item-->

            <div class="item m-t-10">
                <a href="#" class="image">
                    <img data-echo="assets/images/brands/brand2.png" src="assets/images/blank.gif" alt="">
                </a>
            </div>
            <!--/.item-->

            <div class="item">
                <a href="#" class="image">
                    <img data-echo="assets/images/brands/brand3.png" src="assets/images/blank.gif" alt="">
                </a>
            </div>
            <!--/.item-->

            <div class="item">
                <a href="#" class="image">
                    <img data-echo="assets/images/brands/brand4.png" src="assets/images/blank.gif" alt="">
                </a>
            </div>
            <!--/.item-->

            <div class="item">
                <a href="#" class="image">
                    <img data-echo="assets/images/brands/brand5.png" src="assets/images/blank.gif" alt="">
                </a>
            </div>
            <!--/.item-->

            <div class="item">
                <a href="#" class="image">
                    <img data-echo="assets/images/brands/brand6.png" src="assets/images/blank.gif" alt="">
                </a>
            </div>
            <!--/.item-->

            <div class="item">
                <a href="#" class="image">
                    <img data-echo="assets/images/brands/brand2.png" src="assets/images/blank.gif" alt="">
                </a>
            </div>
            <!--/.item-->

            <div class="item">
                <a href="#" class="image">
                    <img data-echo="assets/images/brands/brand4.png" src="assets/images/blank.gif" alt="">
                </a>
            </div>
            <!--/.item-->

            <div class="item">
                <a href="#" class="image">
                    <img data-echo="assets/images/brands/brand1.png" src="assets/images/blank.gif" alt="">
                </a>
            </div>
            <!--/.item-->

            <div class="item">
                <a href="#" class="image">
                    <img data-echo="assets/images/brands/brand5.png" src="assets/images/blank.gif" alt="">
                </a>
            </div>
            <!--/.item-->
        </div><!-- /.owl-carousel #logo-slider -->
    </div><!-- /.logo-slider-inner -->

</div><!-- /.logo-slider -->
<?php require "frontendfooter.php" ?>