<?php require "dbconnected.php";
$sql = "SELECT * FROM items ORDER BY rand()";
$stmt = $conn->prepare($sql);
$stmt->execute();
$items = $stmt->fetchAll();


$sqlhot = "SELECT item_order.*,SUM(qty) as total_qty ,items.id as itemid,items.codeno as itemscode , items.name as itemsname , items.photo as itemphoto , items.price as itemsprice,items.discount as itemsdes
FROM item_order
RIGHT JOIN items
on item_order.item_id=items.id
GROUP BY item_id
ORDER BY rand()";

$stmt =$conn->prepare($sqlhot);
$stmt -> execute();
$itemshot = $stmt->fetchAll();


?>
<?php require 'frontendheader.php' ?>

<div class="body-content outer-top-vs" id="top-banner-and-menu">
    <div class="container" id="showitme">
        <div class="row">
            <!-- ============================================== SIDEBAR ============================================== -->
            <div class="col-xs-12 col-sm-12 col-md-3 sidebar">

                <?php require 'categories.php' ?>

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

                <!-- ============================================== SPECIAL OFFER ============================================== -->

                <div class="sidebar-widget outer-bottom-small">
                    <h3 class="section-title">Special Offer</h3>
                    <div class="sidebar-widget-body outer-top-xs">
                        <div class="owl-carousel sidebar-carousel special-offer custom-carousel owl-theme outer-top-xs">
                            <div class="item">
                                <div class="products special-product">
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image">
                                                            <a href="#"> <img src="assets/images/products/p5.jpg" alt=""> </a>
                                                        </div>
                                                        <!-- /.image -->

                                                    </div>
                                                    <!-- /.product-image -->
                                                </div>
                                                <!-- /.col -->
                                                <div class="col col-xs-7">
                                                    <div class="product-info">
                                                        <h3 class="name"><a href="#">Floral Print Shirt</a></h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="product-price"> <span class="price"> $450.99 </span> </div>
                                                        <!-- /.product-price -->

                                                    </div>
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.product-micro-row -->
                                        </div>
                                        <!-- /.product-micro -->

                                    </div>
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image">
                                                            <a href="#"> <img src="assets/images/products/p9.jpg" alt=""> </a>
                                                        </div>
                                                        <!-- /.image -->

                                                    </div>
                                                    <!-- /.product-image -->
                                                </div>
                                                <!-- /.col -->
                                                <div class="col col-xs-7">
                                                    <div class="product-info">
                                                        <h3 class="name"><a href="#">Floral Print Shirt</a></h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="product-price"> <span class="price"> $450.99 </span> </div>
                                                        <!-- /.product-price -->

                                                    </div>
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.product-micro-row -->
                                        </div>
                                        <!-- /.product-micro -->

                                    </div>
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image">
                                                            <a href="#"> <img src="assets/images/products/p11.jpg" alt=""> </a>
                                                        </div>
                                                        <!-- /.image -->

                                                    </div>
                                                    <!-- /.product-image -->
                                                </div>
                                                <!-- /.col -->
                                                <div class="col col-xs-7">
                                                    <div class="product-info">
                                                        <h3 class="name"><a href="#">Floral Print Shirt</a></h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="product-price"> <span class="price"> $450.99 </span> </div>
                                                        <!-- /.product-price -->

                                                    </div>
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.product-micro-row -->
                                        </div>
                                        <!-- /.product-micro -->

                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="products special-product">
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image">
                                                            <a href="#"> <img src="assets/images/products/p15.jpg" alt=""> </a>
                                                        </div>
                                                        <!-- /.image -->

                                                    </div>
                                                    <!-- /.product-image -->
                                                </div>
                                                <!-- /.col -->
                                                <div class="col col-xs-7">
                                                    <div class="product-info">
                                                        <h3 class="name"><a href="#">Floral Print Shirt</a></h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="product-price"> <span class="price"> $450.99 </span> </div>
                                                        <!-- /.product-price -->

                                                    </div>
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.product-micro-row -->
                                        </div>
                                        <!-- /.product-micro -->

                                    </div>
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image">
                                                            <a href="#"> <img src="assets/images/products/p13.jpg" alt=""> </a>
                                                        </div>
                                                        <!-- /.image -->

                                                    </div>
                                                    <!-- /.product-image -->
                                                </div>
                                                <!-- /.col -->
                                                <div class="col col-xs-7">
                                                    <div class="product-info">
                                                        <h3 class="name"><a href="#">Floral Print Shirt</a></h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="product-price"> <span class="price"> $450.99 </span> </div>
                                                        <!-- /.product-price -->

                                                    </div>
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.product-micro-row -->
                                        </div>
                                        <!-- /.product-micro -->

                                    </div>
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image">
                                                            <a href="#"> <img src="assets/images/products/p12.jpg" alt=""> </a>
                                                        </div>
                                                        <!-- /.image -->

                                                    </div>
                                                    <!-- /.product-image -->
                                                </div>
                                                <!-- /.col -->
                                                <div class="col col-xs-7">
                                                    <div class="product-info">
                                                        <h3 class="name"><a href="#">Floral Print Shirt</a></h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="product-price"> <span class="price"> $450.99 </span> </div>
                                                        <!-- /.product-price -->

                                                    </div>
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.product-micro-row -->
                                        </div>
                                        <!-- /.product-micro -->

                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="products special-product">
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image">
                                                            <a href="#"> <img src="assets/images/products/p1.jpg" alt=""> </a>
                                                        </div>
                                                        <!-- /.image -->

                                                    </div>
                                                    <!-- /.product-image -->
                                                </div>
                                                <!-- /.col -->
                                                <div class="col col-xs-7">
                                                    <div class="product-info">
                                                        <h3 class="name"><a href="#">Floral Print Shirt</a></h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="product-price"> <span class="price"> $450.99 </span> </div>
                                                        <!-- /.product-price -->

                                                    </div>
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.product-micro-row -->
                                        </div>
                                        <!-- /.product-micro -->

                                    </div>
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image">
                                                            <a href="#"> <img src="assets/images/products/p3.jpg" alt=""> </a>
                                                        </div>
                                                        <!-- /.image -->

                                                    </div>
                                                    <!-- /.product-image -->
                                                </div>
                                                <!-- /.col -->
                                                <div class="col col-xs-7">
                                                    <div class="product-info">
                                                        <h3 class="name"><a href="#">Floral Print Shirt</a></h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="product-price"> <span class="price"> $450.99 </span> </div>
                                                        <!-- /.product-price -->
                                                    </div>
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.product-micro-row -->
                                        </div>
                                        <!-- /.product-micro -->

                                    </div>
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image">
                                                            <a href="#"> <img src="assets/images/products/p7.jpg" alt=""> </a>
                                                        </div>
                                                        <!-- /.image -->

                                                    </div>
                                                    <!-- /.product-image -->
                                                </div>
                                                <!-- /.col -->
                                                <div class="col col-xs-7">
                                                    <div class="product-info">
                                                        <h3 class="name"><a href="#">Floral Print Shirt</a></h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="product-price"> <span class="price"> $450.99 </span> </div>
                                                        <!-- /.product-price -->

                                                    </div>
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.product-micro-row -->
                                        </div>
                                        <!-- /.product-micro -->

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.sidebar-widget-body -->
                </div>
                <!-- /.sidebar-widget -->
                <!-- ============================================== SPECIAL OFFER : END ============================================== -->

            </div>
            <!-- /.sidemenu-holder -->
            <!-- ============================================== SIDEBAR : END ============================================== -->

            <!-- ============================================== CONTENT ============================================== -->
            <div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder">
                <!-- ========================================== SECTION – HERO ========================================= -->

                <div id="hero">
                    <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">
                        <div class="item" style="background-image: url(assets/images/sliders/01.jpg);">
                            <div class="container-fluid">
                                <div class="caption bg-color vertical-center text-left">
                                    <div class="slider-header fadeInDown-1">Top Brands</div>
                                    <div class="big-text fadeInDown-1"> New Collections </div>
                                    <div class="excerpt fadeInDown-2 hidden-xs"> <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span> </div>
                                </div>
                                <!-- /.caption -->
                            </div>
                            <!-- /.container-fluid -->
                        </div>
                        <!-- /.item -->

                        <div class="item" style="background-image: url(assets/images/sliders/02.jpg);">
                            <div class="container-fluid">
                                <div class="caption bg-color vertical-center text-left">
                                    <div class="slider-header fadeInDown-1">Spring 2018</div>
                                    <div class="big-text fadeInDown-1"> Women Fashion </div>
                                    <div class="excerpt fadeInDown-2 hidden-xs"> <span>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit</span> </div>
                                    
                                </div>
                                <!-- /.caption -->
                            </div>
                            <!-- /.container-fluid -->
                        </div>
                        <!-- /.item -->

                    </div>
                    <!-- /.owl-carousel -->
                </div>

                <!-- ========================================= SECTION – HERO : END ========================================= -->


                <!-- ============================================== SCROLL TABS ============================================== -->
                <div id="product-tabs-slider" class="scroll-tabs outer-top-vs">
                    <div class="more-info-tab clearfix ">
                        <h3 class="new-product-title pull-left">Categories</h3>
                        <ul class="nav nav-tabs nav-tab-line pull-right" id="new-products-1">
                            <li class="active"><a data-transition-type="backSlide" href="#all" data-toggle="tab">All</a></li>
                            <li><a data-transition-type="backSlide" href="#smartphone" data-toggle="tab">Clothing</a></li>
                            <li><a data-transition-type="backSlide" href="#laptop" data-toggle="tab">Electronics</a></li>
                            <li><a data-transition-type="backSlide" href="#apple" data-toggle="tab">Shoes</a></li>
                        </ul>
                        <!-- /.nav-tabs -->
                    </div>
                    <!-- ============================================== Categories TABS ============================================== -->
                    <div class="tab-content outer-top-xs">
                        <div class="tab-pane in active" id="all">
                            <div class="product-slider">
                                <div class="owl-carousel home-owl-carousel custom-carousel owl-theme">
                                    <?php
                                    $sql = "SELECT * FROM categories ORDER BY rand() LIMIT 5";
                                    $stmt = $conn->prepare($sql);

                                    $stmt->execute();
                                    $categories = $stmt->fetchAll();

                                    foreach ($categories as $category) {
                                        $id = $category['id'];
                                        $cname = $category['name'];
                                        $clogo = $category['logo'];
                                    ?>

                                        <div class="item item-carousel">

                                            <div class="products">
                                                <div class="product">
                                                    <div class="product-image">
                                                        <div class="image">
                                                            <a href="detail.html">
                                                                <img src="<?= 'backend/' . $clogo; ?>" alt="" class="img-fluid">
                                                            </a>
                                                        </div>
                                                        <!-- /.image -->

                                                        <div class="tag new"><span>new</span></div>
                                                    </div>
                                                    <!-- /.product-image -->

                                                    <div class="product-info text-left">
                                                        <h3 class="name"><a href="detail.html"><?= $cname; ?></a></h3>

                                                        <!-- /.product-price -->

                                                    </div>
                                                    <!-- /.product-info -->
                                                    <div class="cart clearfix animate-effect">
                                                        <div class="action">
                                                            <ul class="list-unstyled">
                                                                <li class="add-cart-button btn-group">
                                                                    <!-- <button data-toggle="tooltip" class="btn btn-primary icon" type="button" title="Add Cart"> <i class="fa fa-shopping-cart"></i> </button> -->
                                                                    <!-- <button class="btn btn-primary cart-btn " type="button">Add to cart</button> -->
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
                                        <!-- /.item -->
                                    <?php } ?>
                                </div>
                                <!-- /.home-owl-carousel -->
                            </div>
                            <!-- /.product-slider -->
                        </div>
                        <!-- /.tab-pane -->
                    </div>
                    <!-- ============================================== Categories TABS :END============================================== -->
                    <!-- /.tab-content -->
                </div>
                <!-- /.scroll-tabs -->
                <!-- ============================================== SCROLL TABS : END ============================================== -->
                <!-- ============================================== WIDE PRODUCTS ============================================== -->
                <div class="wide-banners outer-bottom-xs">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <div class="wide-banner cnt-strip">
                                <div class="image"> <img class="img-responsive" src="assets/images/banners/home-banner1.jpg" alt=""> </div>
                            </div>
                            <!-- /.wide-banner -->
                        </div>

                        <div class="col-md-4 col-sm-4">
                            <div class="wide-banner cnt-strip">
                                <div class="image"> <img class="img-responsive" src="assets/images/banners/home-banner3.jpg" alt=""> </div>
                            </div>
                            <!-- /.wide-banner -->
                        </div>

                        <!-- /.col -->
                        <div class="col-md-4 col-sm-4">
                            <div class="wide-banner cnt-strip">
                                <div class="image"> <img class="img-responsive" src="assets/images/banners/home-banner2.jpg" alt=""> </div>
                            </div>
                            <!-- /.wide-banner -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.wide-banners -->

                <!-- ============================================== WIDE PRODUCTS : END ============================================== -->

                <!-- ============================================== WIDE PRODUCTS ============================================== -->

                <!-- /.sidebar-widget -->
                <!-- ============================================== BEST SELLER : END ============================================== -->
                <!-- ============================================== Hot Sell PRODUCTS ============================================== -->
                <section class="section new-arriavls">
                    <h3 class="section-title">Hot Seller Products</h3>
                    <div class="carousel slide" data-ride="carousel"></div>
                    <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">

                        <?php

                        foreach ($itemshot as $hotitem) {

                            $id = $hotitem['itemid'];
                            $name = $hotitem['itemsname'];
                            $price = $hotitem['itemsprice'];
                            $discount = $hotitem['itemsdes'];
                            $photo = $hotitem['itemphoto'];
                            $code = $hotitem['itemscode'];
                            $totalqtysold = $hotitem['total_qty'];
                        ?>
                        <div class="item item-carousel">
                            <div class="products">
                                <div class="product">
                                    <div class="product-image">
                                        <div class="image">
                                            <a href="product-detail.php?id=<?= $id ?>">
                                                <img src="<?= 'backend/' . $photo; ?>" class="img-fluid" alt="">
                                            </a>

                                        </div>
                                        <!-- /.image -->

                                        <div class="tag new"><span>new</span></div>
                                    </div>
                                    <!-- /.product-image -->

                                    <div class="product-info text-left">
                                        <h3 class="name">
                                            <a href="product-detail.php?id=<?= $id ?>"><?= $name; ?></a>
                                        </h3>
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

                                        <div id="totalsold">
                                            <?php 
                                                if($totalqtysold > 0){
                                            ?>
                                            <p>Sold: <?= $totalqtysold ?> qty</p>
                                            <?php } else{?>
                                            <p>Sold: 0 qty</p>
                                            <?php } ?>

                                        </div>
                                        <!-- /.product-price -->

                                    </div>
                                    <!-- /.product-info -->
                                    <div class="cart clearfix animate-effect">
                                        <div class="action">
                                            <ul class="list-unstyled">
                                                <li class="add-cart-button btn-group">
                                                    <button class="btn btn-primary icon addtocart"
                                                        data-toggle="dropdown" type="button" title='Add to Cart'
                                                        data-id='<?= $id; ?>' data-name='<?= $name; ?>'
                                                        data-price='<?= $price ?>' data-discount='<?= $discount ?>'
                                                        data-photo='<?= $photo ?>'>
                                                        <i class="fa fa-shopping-cart"></i> </button>
                                                    <button class="btn btn-primary cart-btn" type="button">Add to
                                                        cart</button>
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
                        <!-- /.item -->
                        <?php } ?>


                    </div>
                    <!-- /.home-owl-carousel -->
                </section>
                <!-- /.section -->
                <!-- ============================================== Hot Sell PRODUCTS : END ============================================== -->

                <!-- ============================================== New PRODUCTS ============================================== -->
                <section class="section new-arriavls">
                    <h3 class="section-title">New Products</h3>
                    <div class="carousel slide" data-ride="carousel"></div>
                    <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">

                        <?php

                        $sql = "SELECT * FROM items ORDER BY created_at LIMIT 8";
                        $stmt = $conn->prepare($sql);
                        $stmt->execute();

                        $newitems = $stmt->fetchAll();

                        foreach ($newitems as $newitem) {

                            $id = $newitem['id'];
                            $nname = $newitem['name'];
                            $nprice = $newitem['price'];
                            $ndiscount = $newitem['discount'];
                            $nphoto = $newitem['photo'];
                            $ncode = $newitem['codeno'];
                        ?>
                            <div class="item item-carousel">
                                <div class="products">
                                    <div class="product">
                                        <div class="product-image">
                                            <div class="image">
                                                <a href="product-detail.php?id=<?= $id ?>">
                                                    <img src="<?= 'backend/' . $nphoto; ?>" class="img-fluid" alt="">
                                                </a>

                                            </div>
                                            <!-- /.image -->

                                            <div class="tag new"><span>new</span></div>
                                        </div>
                                        <!-- /.product-image -->

                                        <div class="product-info text-left">
                                            <h3 class="name"><a href="product-detail.php?id=<?= $id ?>"><?= $nname; ?></a></h3>
                                            <div class="rating rateit-small"></div>
                                            <div class="description"></div>
                                            <div class="product-price">

                                                <?php
                                                if ($ndiscount) {
                                                ?>
                                                    <span class="price">
                                                        <?= $nprice; ?> ks</span>
                                                    <span class="price-before-discount">
                                                        <?= $ndiscount; ?> ks
                                                    </span>
                                                <?php } else { ?>
                                                    <span class="price">
                                                        <?= $nprice; ?> ks</span>
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
                            <!-- /.item -->
                        <?php } ?>


                    </div>
                    <!-- /.home-owl-carousel -->
                </section>
                <!-- /.section -->
                <!-- ============================================== New PRODUCTS : END ============================================== -->

                <!-- ============================================== Discount PRODUCTS ============================================== -->
                <section class="section new-arriavls">
                    <h3 class="section-title">Discount Products</h3>
                    <div class="carousel slide" data-ride="carousel"></div>
                    <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">

                        <?php

                        $sql = "SELECT * FROM items WHERE discount != '' ORDER BY rand() LIMIT 8";
                        $stmt = $conn->prepare($sql);
                        $stmt->execute();

                        $discountitem = $stmt->fetchAll();

                        foreach ($discountitem as $discount) {

                            $id = $discount['id'];
                            $dname = $discount['name'];
                            $dprice = $discount['price'];
                            $ddiscount = $discount['discount'];
                            $dphoto = $discount['photo'];
                            $dcode = $discount['codeno'];
                        ?>
                            <div class="item item-carousel">
                                <div class="products">
                                    <div class="product">
                                        <div class="product-image">
                                            <div class="image">
                                                <a href="product-detail.php?id=<?= $id ?>">
                                                    <img src="<?= 'backend/' . $dphoto; ?>" class="img-fluid" alt="">
                                                </a>

                                            </div>
                                            <!-- /.image -->

                                            <div class="tag new"><span>new</span></div>
                                        </div>
                                        <!-- /.product-image -->

                                        <div class="product-info text-left">
                                            <h3 class="name"><a href="product-detail.php?id=<?= $id ?>"><?= $dname; ?></a></h3>
                                            <div class="rating rateit-small"></div>
                                            <div class="description"></div>
                                            <div class="product-price"> <span class="price"> <?= $dprice; ?> ks</span> <span class="price-before-discount"><?= $ddiscount; ?> ks</span> </div>
                                            <!-- /.product-price -->

                                        </div>
                                        <!-- /.product-info -->
                                        <div class="cart clearfix animate-effect">
                                            <div class="action">
                                                <ul class="list-unstyled">
                                                    <li class="add-cart-button btn-group ">
                                                        <button class="btn btn-primary icon addtocart" data-toggle="dropdown" type="button" data-id='<?= $id; ?>' data-name='<?= $dname; ?>' data-price='<?= $dprice ?>' data-discount='<?= $ddiscount ?>' data-photo='<?= $dphoto ?>'>
                                                            <a></a>
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
                            <!-- /.item -->
                        <?php } ?>


                    </div>
                    <!-- /.home-owl-carousel -->
                </section>
                <!-- /.section -->
                <!-- ============================================== Discount PRODUCTS : END ============================================== -->
            </div>
            <!-- ============================================== Show all Items ========================================================= -->
                <div class="clearfix filters-container m-t-10">
                    <div class="row">
                        <div class="col col-sm-6 col-md-3 col-lg-3 col-xs-6">
                            <div class="filter-tabs">
                                <ul id="filter-tabs" class="nav nav-tabs nav-tab-box nav-tab-fa-icon">
                                    <li class="active"> <a data-toggle="tab" href="#grid-container"><i class="icon fa fa-th-large"></i>Grid</a> </li>
                                    <li><a data-toggle="tab" href="#list-container"><i class="icon fa fa-bars"></i>List</a></li>
                                </ul>
                            </div>
                            <!-- /.filter-tabs -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <div class="search-result-container ">
                    <div id="myTabContent" class="tab-content category-list">
                        <div class="tab-pane active " id="grid-container">
                            <div class="category-product">
                                <div class="row">
                                    <?php
                                    foreach ($items as $item) {
                                        $id = $item['id'];
                                        $codeno = $item['codeno'];
                                        $name = $item['name'];
                                        $photo = $item['photo'];
                                        $price = $item['price'];
                                        $discount = $item['discount'];

                                    ?>
                                        <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                                            <div class="item">
                                                <div class="products">
                                                    <div class="product">
                                                        <div class="product-image">
                                                            <div class="image">
                                                                <a href="product-detail.php?id=<?= $id ?>">
                                                                    <img src="backend/<?= $photo ?>" alt="">

                                                                </a>
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
                                                                        <button class="btn btn-primary icon addtocart" data-toggle="dropdown" type="button" title='Add to Cart' data-id='<?= $id; ?>' data-name='<?= $name; ?>' data-price='<?= $price ?>' data-discount='<?= $discount ?>' data-photo='<?= $photo ?>'>
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
                                        </div>
                                    <?php } ?>
                                    <!-- /.item -->

                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.category-product -->

                        </div>
                        <!-- /.tab-pane -->

                        <div class="tab-pane " id="list-container">
                            <div class="category-product">
                                <?php
                                foreach ($items as $item) {
                                    # code...
                                    $id = $item['id'];
                                    $name = $item['name'];
                                    $price = $item['price'];
                                    $discount = $item['discount'];
                                    $photo = $item['photo'];
                                    $description = $item['description'];
                                    $codeno = $item['codeno'];

                                ?>
                                    <div class="category-product-inner">
                                        <div class="products">
                                            <div class="product-list product">
                                                <div class="row product-list-row">
                                                    <div class="col col-sm-3 col-lg-3">
                                                        <div class="product-image">
                                                            <div class="image">
                                                                <a href="product-detail.php?id=<?= $id ?>">
                                                                    <img src="backend/<?= $photo ?>" alt="">
                                                                </a>

                                                            </div>
                                                        </div>
                                                        <!-- /.product-image -->
                                                    </div>
                                                    <!-- /.col -->
                                                    <div class="col col-sm-9 col-lg-9">
                                                        <div class="product-info">
                                                            <h3 class="name"><a href="product-detail.php?id=<?= $id ?>"><?= $name ?></a></h3>
                                                            <div class="rating rateit-small"></div>
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
                                                            <div class="description m-t-10"><?= $description; ?></div>
                                                            <div class="cart clearfix animate-effect">
                                                                <div class="action">
                                                                    <ul class="list-unstyled">
                                                                        <li class="add-cart-button btn-group">
                                                                            <button class="btn btn-primary icon addtocart" data-toggle="dropdown" type="button" title='Add to Cart' data-id='<?= $id; ?>' data-name='<?= $name; ?>' data-price='<?= $price ?>' data-discount='<?= $discount ?>' data-photo='<?= $photo ?>'>
                                                                                <i class="fa fa-shopping-cart"></i> </button>
                                                                            <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <!-- /.action -->
                                                            </div>
                                                            <!-- /.cart -->

                                                        </div>
                                                        <!-- /.product-info -->
                                                    </div>
                                                    <!-- /.col -->
                                                </div>
                                                <!-- /.product-list-row -->
                                            </div>
                                            <!-- /.product-list -->
                                        </div>
                                        <!-- /.products -->
                                    </div>
                                    <!-- /.category-product-inner -->

                                <?php } ?>
                            </div>
                            <!-- /.category-product -->
                        </div>
                        <!-- /.tab-pane #list-container -->
                    </div>
                    <!-- /.tab-content -->
                </div>
        <!-- ========================================= End Show all Items  ========================================== -->
        </div>
        <!-- /.homebanner-holder -->
        <!-- ============================================== CONTENT : END ============================================== -->
    </div>
    <!-- /.row -->
    <!-- ============================================== BRANDS CAROUSEL ============================================== -->
    <div id="brands-carousel" class="logo-slider">
        <div class="logo-slider-inner">
            <div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">
                <?php
                $sql = "SELECT * FROM brands ORDER BY rand() LIMIT 2,8";

                $stmt = $conn->prepare($sql);
                $stmt->execute();

                $brands = $stmt->fetchAll();


                foreach ($brands as $brand) {

                    $bid = $brand['id'];
                    $bname = $brand['name'];
                    $blogo = $brand['logo'];
                ?>
                    <div class="item m-t-15">
                        <a href="#" class="image"> <img data-echo="<?= 'backend/' . $blogo ?>" src="<?= 'backend/' . $blogo ?>" alt=""> </a>
                    </div>
                <?php } ?>
                <!--/.item-->
            </div>
            <!-- /.owl-carousel #logo-slider -->
        </div>
        <!-- /.logo-slider-inner -->

    </div>
    <!-- /.logo-slider -->
    <!-- ============================================== BRANDS CAROUSEL : END ============================================== -->
</div>

<!-- /#top-banner-and-menu -->
<?php require 'frontendfooter.php' ?>
