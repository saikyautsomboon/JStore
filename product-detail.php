<?php
require 'dbconnected.php';
require "frontendheader.php";

$itemid = $_GET['id'];


$sql = "SELECT * FROM items WHERE id=:id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':id', $itemid);
$stmt->execute();

$itemshow = $stmt->fetch(PDO::FETCH_ASSOC);

$sql = "SELECT * FROM items";
$stmt = $conn->prepare($sql);
$stmt->execute();

$items = $stmt->fetchAll();
?>
<div class="breadcrumb">
    <div class="container">
        <div class="breadcrumb-inner">
            <ul class="list-inline list-unstyled">
                <li><a href="#">Home</a></li>
                <li><a href="#">Clothing</a></li>
                <li class='active'>Floral Print Buttoned</li>
            </ul>
        </div>
        <!-- /.breadcrumb-inner -->
    </div>
    <!-- /.container -->
</div>
<!-- /.breadcrumb -->
<div class="body-content outer-top-xs">
    <div class='container'>
        <div class='row single-product'>
            <div class='col-xs-12 col-sm-12 col-md-3 sidebar'>
                <div class="sidebar-module-container">
                    <div class="home-banner outer-top-n outer-bottom-xs">
                        <img src="assets/images/banners/LHS-banner.jpg" alt="Image">
                    </div>


                    <!-- ============================================== HOT DEALS ============================================== -->
                    <div class="sidebar-widget hot-deals outer-bottom-xs">
                        <h3 class="section-title">Hot deals</h3>
                        <div class="owl-carousel sidebar-carousel custom-carousel owl-theme outer-top-ss">
                            <div class="item">
                                <div class="products">
                                    <div class="hot-deal-wrapper">
                                        <div class="image">
                                            <a href="#">
                                                <img src="assets/images/hot-deals/p13.jpg" alt="">
                                                <img src="assets/images/hot-deals/p13_hover.jpg" alt="" class="hover-image">
                                            </a>
                                        </div>
                                        <div class="sale-offer-tag"><span>49%<br>
                                                off</span></div>
                                        <div class="timing-wrapper">
                                            <div class="box-wrapper">
                                                <div class="date box"> <span class="key">120</span> <span class="value">DAYS</span> </div>
                                            </div>
                                            <div class="box-wrapper">
                                                <div class="hour box"> <span class="key">20</span> <span class="value">HRS</span> </div>
                                            </div>
                                            <div class="box-wrapper">
                                                <div class="minutes box"> <span class="key">36</span> <span class="value">MINS</span> </div>
                                            </div>
                                            <div class="box-wrapper">
                                                <div class="seconds box"> <span class="key">60</span> <span class="value">SEC</span> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.hot-deal-wrapper -->

                                    <div class="product-info text-left m-t-20">
                                        <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                                        <div class="rating rateit-small"></div>
                                        <div class="product-price"> <span class="price"> $600.00 </span> <span class="price-before-discount">$800.00</span> </div>
                                        <!-- /.product-price -->

                                    </div>
                                    <!-- /.product-info -->

                                    <div class="cart clearfix animate-effect">
                                        <div class="action">
                                            <div class="add-cart-button btn-group">
                                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                            </div>
                                        </div>
                                        <!-- /.action -->
                                    </div>
                                    <!-- /.cart -->
                                </div>
                            </div>
                            <div class="item">
                                <div class="products">
                                    <div class="hot-deal-wrapper">
                                        <div class="image">
                                            <a href="#">
                                                <img src="assets/images/hot-deals/p14.jpg" alt="">
                                                <img src="assets/images/hot-deals/p14_hover.jpg" alt="" class="hover-image">
                                            </a>
                                        </div>
                                        <div class="sale-offer-tag"><span>35%<br>
                                                off</span></div>
                                        <div class="timing-wrapper">
                                            <div class="box-wrapper">
                                                <div class="date box"> <span class="key">120</span> <span class="value">Days</span> </div>
                                            </div>
                                            <div class="box-wrapper">
                                                <div class="hour box"> <span class="key">20</span> <span class="value">HRS</span> </div>
                                            </div>
                                            <div class="box-wrapper">
                                                <div class="minutes box"> <span class="key">36</span> <span class="value">MINS</span> </div>
                                            </div>
                                            <div class="box-wrapper">
                                                <div class="seconds box"> <span class="key">60</span> <span class="value">SEC</span> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.hot-deal-wrapper -->

                                    <div class="product-info text-left m-t-20">
                                        <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                                        <div class="rating rateit-small"></div>
                                        <div class="product-price"> <span class="price"> $600.00 </span> <span class="price-before-discount">$800.00</span> </div>
                                        <!-- /.product-price -->

                                    </div>
                                    <!-- /.product-info -->

                                    <div class="cart clearfix animate-effect">
                                        <div class="action">
                                            <div class="add-cart-button btn-group">
                                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                            </div>
                                        </div>
                                        <!-- /.action -->
                                    </div>
                                    <!-- /.cart -->
                                </div>
                            </div>
                            <div class="item">
                                <div class="products">
                                    <div class="hot-deal-wrapper">
                                        <div class="image">
                                            <a href="#">
                                                <img src="assets/images/hot-deals/p15.jpg" alt="">
                                                <img src="assets/images/hot-deals/p15_hover.jpg" alt="" class="hover-image">
                                            </a>
                                        </div>
                                        <div class="sale-offer-tag"><span>35%<br>
                                                off</span></div>
                                        <div class="timing-wrapper">
                                            <div class="box-wrapper">
                                                <div class="date box"> <span class="key">120</span> <span class="value">Days</span> </div>
                                            </div>
                                            <div class="box-wrapper">
                                                <div class="hour box"> <span class="key">20</span> <span class="value">HRS</span> </div>
                                            </div>
                                            <div class="box-wrapper">
                                                <div class="minutes box"> <span class="key">36</span> <span class="value">MINS</span> </div>
                                            </div>
                                            <div class="box-wrapper">
                                                <div class="seconds box"> <span class="key">60</span> <span class="value">SEC</span> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.hot-deal-wrapper -->

                                    <div class="product-info text-left m-t-20">
                                        <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                                        <div class="rating rateit-small"></div>
                                        <div class="product-price"> <span class="price"> $600.00 </span> <span class="price-before-discount">$800.00</span> </div>
                                        <!-- /.product-price -->

                                    </div>
                                    <!-- /.product-info -->

                                    <div class="cart clearfix animate-effect">
                                        <div class="action">
                                            <div class="add-cart-button btn-group">
                                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                            </div>
                                        </div>
                                        <!-- /.action -->
                                    </div>
                                    <!-- /.cart -->
                                </div>
                            </div>
                        </div>
                        <!-- /.sidebar-widget -->
                    </div>
                    <!-- ============================================== HOT DEALS: END ============================================== -->

                    <!-- ============================================== NEWSLETTER ============================================== -->
                    <div class="sidebar-widget newsletter outer-bottom-small outer-top-vs">
                        <h3 class="section-title">Newsletters</h3>
                        <div class="sidebar-widget-body outer-top-xs">
                            <p>Sign Up for Our Newsletter!</p>
                            <form>
                                <div class="form-group">
                                    <label class="sr-only" for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Subscribe to our newsletter">
                                </div>
                                <button class="btn btn-primary">Subscribe</button>
                            </form>
                        </div>
                        <!-- /.sidebar-widget-body -->
                    </div>
                    <!-- /.sidebar-widget -->
                    <!-- ============================================== NEWSLETTER: END ============================================== -->
                </div>
            </div>
            <!-- /.sidebar -->
            <div class='col-xs-12 col-sm-12 col-md-9 rht-col'>
                <div class="detail-block">
                    <div class="row">

                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 gallery-holder">
                            <div class="product-item-holder size-big single-product-gallery small-gallery">

                                <div id="owl-single-product">
                                    <div class="single-product-gallery-item" id="slide1">
                                        <a data-lightbox="image-1" data-title="Gallery" href="assets/images/products/p1.jpg">
                                            <img class="img-responsive" alt="" src="assets/images/blank.gif" data-echo="assets/images/products/p1.jpg" />
                                        </a>
                                    </div>
                                    <!-- /.single-product-gallery-item -->

                                    <!-- <div class="single-product-gallery-item" id="slide2">
                                        <a data-lightbox="image-1" data-title="Gallery" href="assets/images/products/p2.jpg">
                                            <img class="img-responsive" alt="" src="assets/images/blank.gif" data-echo="assets/images/products/p2.jpg" />
                                        </a>
                                    </div> -->
                                    <!-- /.single-product-gallery-item -->

                                    <!-- <div class="single-product-gallery-item" id="slide3">
                                        <a data-lightbox="image-1" data-title="Gallery" href="assets/images/products/p3.jpg">
                                            <img class="img-responsive" alt="" src="assets/images/blank.gif" data-echo="assets/images/products/p3.jpg" />
                                        </a>
                                    </div> -->
                                    <!-- /.single-product-gallery-item -->

                                    <!-- <div class="single-product-gallery-item" id="slide4">
                                        <a data-lightbox="image-1" data-title="Gallery" href="assets/images/products/p4.jpg">
                                            <img class="img-responsive" alt="" src="assets/images/blank.gif" data-echo="assets/images/products/p4.jpg" />
                                        </a>
                                    </div> -->
                                    <!-- /.single-product-gallery-item -->

                                    <!-- <div class="single-product-gallery-item" id="slide5">
                                        <a data-lightbox="image-1" data-title="Gallery" href="assets/images/products/p5.jpg">
                                            <img class="img-responsive" alt="" src="assets/images/blank.gif" data-echo="assets/images/products/p5.jpg" />
                                        </a>
                                    </div> -->
                                    <!-- /.single-product-gallery-item -->

                                    <!-- <div class="single-product-gallery-item" id="slide6">
                                        <a data-lightbox="image-1" data-title="Gallery" href="assets/images/products/p6.jpg">
                                            <img class="img-responsive" alt="" src="assets/images/blank.gif" data-echo="assets/images/products/p6.jpg" />
                                        </a>
                                    </div> -->
                                    <!-- /.single-product-gallery-item -->

                                    <!-- <div class="single-product-gallery-item" id="slide7">
                                        <a data-lightbox="image-1" data-title="Gallery" href="assets/images/products/p7.jpg">
                                            <img class="img-responsive" alt="" src="assets/images/blank.gif" data-echo="assets/images/products/p7.jpg" />
                                        </a>
                                    </div> -->
                                    <!-- /.single-product-gallery-item -->

                                    <!-- <div class="single-product-gallery-item" id="slide8">
                                        <a data-lightbox="image-1" data-title="Gallery" href="assets/images/products/p8.jpg">
                                            <img class="img-responsive" alt="" src="assets/images/blank.gif" data-echo="assets/images/products/p8.jpg" />
                                        </a>
                                    </div> -->
                                    <!-- /.single-product-gallery-item -->

                                    <!-- <div class="single-product-gallery-item" id="slide9">
                                        <a data-lightbox="image-1" data-title="Gallery" href="assets/images/products/p9.jpg">
                                            <img class="img-responsive" alt="" src="assets/images/blank.gif" data-echo="assets/images/products/p9.jpg" />
                                        </a>
                                    </div> -->
                                    <!-- /.single-product-gallery-item -->

                                </div>
                                <!-- /.single-product-slider -->


                                <div class="single-product-gallery-thumbs gallery-thumbs">

                                    <div id="owl-single-product-thumbnails">
                                        <div class="item">
                                            <a class="horizontal-thumb active" data-target="#owl-single-product" data-slide="1" href="#slide1">
                                                <img class="img-responsive" alt="" src="assets/images/blank.gif" data-echo="assets/images/products/p1.jpg" />
                                            </a>
                                        </div>

                                        <div class="item">
                                            <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="2" href="#slide2">
                                                <img class="img-responsive" alt="" src="assets/images/blank.gif" data-echo="assets/images/products/p2.jpg" />
                                            </a>
                                        </div>
                                        <div class="item">

                                            <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="3" href="#slide3">
                                                <img class="img-responsive" alt="" src="assets/images/blank.gif" data-echo="assets/images/products/p3.jpg" />
                                            </a>
                                        </div>
                                        <div class="item">

                                            <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="4" href="#slide4">
                                                <img class="img-responsive" alt="" src="assets/images/blank.gif" data-echo="assets/images/products/p4.jpg" />
                                            </a>
                                        </div>
                                        <div class="item">

                                            <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="5" href="#slide5">
                                                <img class="img-responsive" alt="" src="assets/images/blank.gif" data-echo="assets/images/products/p5.jpg" />
                                            </a>
                                        </div>
                                        <div class="item">

                                            <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="6" href="#slide6">
                                                <img class="img-responsive" alt="" src="assets/images/blank.gif" data-echo="assets/images/products/p6.jpg" />
                                            </a>
                                        </div>
                                        <div class="item">

                                            <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="7" href="#slide7">
                                                <img class="img-responsive" alt="" src="assets/images/blank.gif" data-echo="assets/images/products/p7.jpg" />
                                            </a>
                                        </div>
                                        <div class="item">

                                            <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="8" href="#slide8">
                                                <img class="img-responsive" alt="" src="assets/images/blank.gif" data-echo="assets/images/products/p8.jpg" />
                                            </a>
                                        </div>
                                        <div class="item">

                                            <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="9" href="#slide9">
                                                <img class="img-responsive" alt="" src="assets/images/blank.gif" data-echo="assets/images/products/p9.jpg" />
                                            </a>
                                        </div>
                                    </div>
                                    <!-- /#owl-single-product-thumbnails -->



                                </div>
                                <!-- /.gallery-thumbs -->

                            </div>
                            <!-- /.single-product-gallery -->
                        </div>
                        <!-- /.gallery-holder -->
                        <div class='col-sm-12 col-md-8 col-lg-8 product-info-block'>
                            <div class="product-info">
                                <h1 class="name"><?= $itemshow['name'] ?></h1>

                                <div class="stock-container info-container m-t-10">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="pull-left">
                                                <div class="stock-box">
                                                    <span class="label">Availability :</span>
                                                </div>
                                            </div>
                                            <div class="pull-left">
                                                <div class="stock-box">
                                                    <span class="value">In Stock</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /.stock-container -->

                                <div class="description-container m-t-20">
                                    <p><?= $itemshow['description'] ?> </p>
                                </div>
                                <!-- /.description-container -->

                                <div class="price-container info-container m-t-30">
                                    <div class="row">


                                        <div class="col-sm-6 col-xs-6">
                                            <div class="price-box">
                                                <?php
                                                $total = (int)$itemshow['price'] - (int)$itemshow['discount'];
                                                if ($itemshow['discount']) {

                                                ?>
                                                    <span class="price"><?= $total; ?></span>
                                                    <span class="price-strike"><?= $itemshow['price'] ?></span>
                                                <?php } else { ?>
                                                    <span class="price"><?= $total; ?></span>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /.price-container -->

                                <div class="quantity-container info-container">
                                    <div class="row">

                                        <div class="add-btn">
                                            <a href="#" class="btn btn-primary addtocart" data-id="<?= $itemshow['id']; ?>" data-name="<?= $itemshow['name']; ?>" data-price="<?= $itemshow['price'] ?>" data-discount="<?= $itemshow['discount'] ?>" data-photo="<?= $itemshow['photo'] ?>">
                                                <i class="fa fa-shopping-cart inner-right-vs"></i> ADD TO CART</a>
                                        </div>


                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /.quantity-container -->
                            </div>
                            <!-- /.product-info -->
                        </div>
                        <!-- /.col-sm-7 -->
                    </div>
                    <!-- /.row -->
                </div>

                <!-- ============================================== UPSELL PRODUCTS ============================================== -->
                <section class="section featured-product">
                    <div class="row">
                        <div class="col-lg-3">
                            <h3 class="section-title">Sell Products</h3>
                            <div class="ad-imgs">
                                <img class="img-responsive" src="assets/images/banners/home-banner1.jpg" alt="">
                                <img class="img-responsive" src="assets/images/banners/home-banner2.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="owl-carousel homepage-owl-carousel upsell-product custom-carousel owl-theme outer-top-xs">
                                <?php

                                foreach ($items as $item) {
                                    $id = $item['id'];
                                    $name = $item['name'];
                                    $price = $item['price'];
                                    $discount = $item['discount'];
                                    $photo = $item['photo'];
                                    $code = $item['codeno'];

                                ?>
                                    <div class="item item-carousel">
                                        <div class="products">

                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image">
                                                        <a href="product-detail.php?id=<?= $id ?>"><img src="backend/<?= $photo ?>" alt=""></a>
                                                    </div>
                                                    <!-- /.image -->
                                                </div>
                                                <!-- /.product-image -->


                                                <div class="product-info text-left">
                                                    <h3 class="name"><a href="product-detail.php?id=<?= $id ?>"><?= $name ?></a></h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="description"></div>

                                                    <div class="product-price">
                                                        <?php
                                                        if ($discount) {
                                                        ?>
                                                            <span class="price">
                                                                <?= $price; ?> ks</span>
                                                            <span class="price-before-discount">
                                                                <?= $discount; ?> ks
                                                            </span>
                                                        <?php } else { ?>
                                                            <span class="price">
                                                                <?= $price; ?> ks</span>
                                                        <?php } ?>

                                                    </div>
                                                    <!-- /.product-price -->

                                                </div>
                                                <!-- /.product-info -->
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">
                                                                <button class="btn btn-primary icon addtocart" data-toggle="dropdown" type="button" title='Add to Cart' data-id='<?= $id; ?>' data-name='<?= $nname; ?>' data-price='<?= $nprice ?>' data-discount='<?= $ndiscount ?>' data-photo='<?= $nphoto ?>'>
                                                                    <i class="fa fa-shopping-cart"></i> </button>
                                                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- /.action -->
                                                </div>
                                                <!-- /.cart -->
                                            </div>
                                            <!-- /.product -->

                                        </div>
                                        <!-- /.products -->
                                    </div>
                                <?php } ?>
                            </div>
                            <!-- /.home-owl-carousel -->
                        </div>
                    </div>
                </section>
                <!-- /.section -->
                <!-- ============================================== UPSELL PRODUCTS : END ============================================== -->

            </div>
            <!-- /.col -->
            <div class="clearfix"></div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</div>
<!-- /.body-content -->

<?php require "frontendfooter.php" ?>