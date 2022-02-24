<?php

session_start();
require "dbconnected.php";
$sql = "SELECT * FROM categories ORDER BY id";
$stmt = $conn->prepare($sql);
$stmt->execute();
$categories = $stmt->fetchAll();


?>






<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="MediaCenter, Template, eCommerce">
    <meta name="robots" content="all">
    <title>JStore & Shopping</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link href="assets/css/custom.css">

    <!-- Customizable CSS -->
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/blue.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/owl.transitions.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/rateit.css">
    <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">

    <!-- Icons/Glyphs -->
    <link rel="stylesheet" href="assets/css/font-awesome.css">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Barlow:200,300,300i,400,400i,500,500i,600,700,800" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    <script src='bootstrap/js/jquery.min.js'></script>
    <script src='shoppingcart.js'></script>
</head>

<body class="cnt-home">
    <!-- ============================================== HEADER ============================================== -->
    <header class="header-style-1">

        <!-- ============================================== Login || Logout MENU ============================================== -->
        <div class="top-bar animate-dropdown">
            <div class="container">
                <div class="header-top-inner">
                    <div class="cnt-account">
                        <ul class="list-unstyled">
                            <li class="myaccount"><a href="#"><span>My Account</span></a></li>
                            <li class="header_cart hidden-xs"><a href="orderhistory.php"><span>Order History</span></a></li>
                            <?php 
                                if (isset($_SESSION['login_user'])) {
                            ?>
                            <li class="login"><a href=""><span>
                                <?= $_SESSION['login_user']['name']?>
                            </span></a></li>
                            <li class="logout"><a href="backend/logout.php"><span>Log Out</span></a></li>

                            <?php } else { ?>
                                <li class="login"><a href="sign-in.php"><span>Login</span></a></li>

                            <?php }?>
                        </ul>
                    </div>
                    <!-- /.cnt-account -->

                    <div class="clearfix"></div>
                </div>
                <!-- /.header-top-inner -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.header-top -->
        <!-- ============================================== Login || Logout MENU : END ============================================== -->
        <div class="main-header">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-3 logo-holder">
                        <!-- ============================================================= LOGO ============================================================= -->
                        <div class="logo"> <a href="home.html"> <img src="assets/images/logo.png" alt="logo"> </a> </div>
                        <!-- /.logo -->
                        <!-- ============================================================= LOGO : END ============================================================= -->
                    </div>
                    <!-- /.logo-holder -->

                    <div class="col-lg-7 col-md-6 col-sm-8 col-xs-12 top-search-holder">
                        <!-- /.contact-row -->
                        <!-- ============================================================= SEARCH AREA ============================================================= -->
                        <div class="search-area">
                            <form>
                                <div class="control-group">
                                    <ul class="categories-filter animate-dropdown">
                                        <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="category.html">Categories <b class="caret"></b></a>
                                            <ul class="dropdown-menu" role="menu">

                                                <?php foreach ($categories as $category) {
                                                    $cid = $category['id'];
                                                    $cname = $category['name'];

                                                ?>

                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="category.html"><?= $cname; ?></a></li>
                                                <?php } ?>
                                            </ul>
                                        </li>
                                    </ul>
                                    <input class="search-field" placeholder="Search here..." />
                                    <a class="search-button" href="#"></a>
                                </div>
                            </form>
                        </div>
                        <!-- /.search-area -->
                        <!-- ============================================================= SEARCH AREA : END ============================================================= -->
                    </div>
                    <!-- /.top-search-holder -->

                    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12 animate-dropdown top-cart-row">
                        <!-- ============================================================= SHOPPING CART DROPDOWN ============================================================= -->

                        <div class="dropdown dropdown-cart">
                            <a href="#" class="dropdown-toggle lnk-cart" data-toggle="dropdown">
                                <div class="items-cart-inner">
                                    <div class="basket">
                                        <div class="basket-item-count"><span class="count"></span></div>
                                        <div class="total-price-basket"> <span class="lbl">Shopping Cart</span> <span class="totalprice"></span> Ks </div>
                                    </div>
                                </div>
                            </a>
                            <ul class="dropdown-menu" id="itemdropdown">

                            </ul>
                            <!-- /.dropdown-menu-->
                        </div>
                        <!-- /.dropdown-cart -->

                        <!-- ============================================================= SHOPPING CART DROPDOWN : END============================================================= -->
                    </div>
                    <!-- /.top-cart-row -->
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container -->

        </div>
        <!-- /.main-header -->

        <!-- ============================================== NAVBAR ============================================== -->
        <div class="header-nav animate-dropdown">
            <div class="container">
                <div class="yamm navbar navbar-default" role="navigation">
                    <div class="navbar-header">
                        <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                            <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                    </div>
                    <div class="nav-bg-class">
                        <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
                            <div class="nav-outer">
                                <ul class="nav navbar-nav">
                                    <li class="active dropdown"> <a href="index.php">Home</a> </li>
                                    <li class="dropdown yamm mega-menu">
                                        <a href="home.html" data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown">Brands</a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <div class="yamm-content ">
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-6 col-md-2 col-menu">
                                                            <a href="brands.php"><h2 class="title">Brands</h2></a>  
                                                            <ul class="links">
                                                                <?php

                                                                $sql = "SELECT * FROM brands LIMIT 5";
                                                                $stmt = $conn->prepare($sql);
                                                                $stmt->execute();
                                                                $brands = $stmt->fetchAll();

                                                                foreach ($brands as $brand) {
                                                                    $id = $brand['id'];
                                                                    $bname = $brand['name'];
                                                                ?>
                                                                    <li><a href="subbrands.php?id=<?= $id?>"><?= $bname; ?></a></li>
                                                                <?php } ?>
                                                            </ul>
                                                        </div>
                                                        <!-- /.col -->

                                                        <div class="col-xs-12 col-sm-6 col-md-2 col-menu">
                                                            <ul class="links">
                                                                <?php
                                                                $sql = "SELECT * FROM brands LIMIT  5,5 ";
                                                                $stmt = $conn->prepare($sql);
                                                                $stmt->execute();

                                                                $brands = $stmt->fetchAll();

                                                                foreach ($brands as $brand) {
                                                                    $id = $brand['id'];
                                                                    $bname = $brand['name'];
                                                                ?>
                                                                    <li><a href="subbrands.php?id=<?= $id?>"><?= $bname; ?></a></li>
                                                                <?php } ?>

                                                            </ul>
                                                        </div>
                                                        <!-- /.col -->
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown mega-menu">
                                        <a href="category.html" data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown">Electronics </a>
                                        <ul class="dropdown-menu container">
                                            <li>
                                                <div class="yamm-content">
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-12 col-md-2 col-menu">
                                                            <h2 class="title">Laptops</h2>
                                                            <ul class="links">
                                                                <li><a href="#">Gaming</a></li>
                                                                <li><a href="#">Laptop Skins</a></li>
                                                                <li><a href="#">Apple</a></li>
                                                                <li><a href="#">Dell</a></li>
                                                                <li><a href="#">Lenovo</a></li>
                                                                <li><a href="#">Microsoft</a></li>
                                                                <li><a href="#">Asus</a></li>
                                                                <li><a href="#">Adapters</a></li>
                                                                <li><a href="#">Batteries</a></li>
                                                                <li><a href="#">Cooling Pads</a></li>
                                                            </ul>
                                                        </div>
                                                        <!-- /.col -->

                                                        <div class="col-xs-12 col-sm-12 col-md-2 col-menu">
                                                            <h2 class="title">Desktops</h2>
                                                            <ul class="links">
                                                                <li><a href="#">Routers & Modems</a></li>
                                                                <li><a href="#">CPUs, Processors</a></li>
                                                                <li><a href="#">PC Gaming Store</a></li>
                                                                <li><a href="#">Graphics Cards</a></li>
                                                                <li><a href="#">Components</a></li>
                                                                <li><a href="#">Webcam</a></li>
                                                                <li><a href="#">Memory (RAM)</a></li>
                                                                <li><a href="#">Motherboards</a></li>
                                                                <li><a href="#">Keyboards</a></li>
                                                                <li><a href="#">Headphones</a></li>
                                                            </ul>
                                                        </div>
                                                        <!-- /.col -->

                                                        <div class="col-xs-12 col-sm-12 col-md-2 col-menu">
                                                            <h2 class="title">Cameras</h2>
                                                            <ul class="links">
                                                                <li><a href="#">Accessories</a></li>
                                                                <li><a href="#">Binoculars</a></li>
                                                                <li><a href="#">Telescopes</a></li>
                                                                <li><a href="#">Camcorders</a></li>
                                                                <li><a href="#">Digital</a></li>
                                                                <li><a href="#">Film Cameras</a></li>
                                                                <li><a href="#">Flashes</a></li>
                                                                <li><a href="#">Lenses</a></li>
                                                                <li><a href="#">Surveillance</a></li>
                                                                <li><a href="#">Tripods</a></li>
                                                            </ul>
                                                        </div>
                                                        <!-- /.col -->
                                                        <div class="col-xs-12 col-sm-12 col-md-2 col-menu">
                                                            <h2 class="title">Mobile Phones</h2>
                                                            <ul class="links">
                                                                <li><a href="#">Apple</a></li>
                                                                <li><a href="#">Samsung</a></li>
                                                                <li><a href="#">Lenovo</a></li>
                                                                <li><a href="#">Motorola</a></li>
                                                                <li><a href="#">LeEco</a></li>
                                                                <li><a href="#">Asus</a></li>
                                                                <li><a href="#">Acer</a></li>
                                                                <li><a href="#">Accessories</a></li>
                                                                <li><a href="#">Headphones</a></li>
                                                                <li><a href="#">Memory Cards</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-12 col-md-4 col-menu custom-banner"> <a href="#"><img alt="" src="assets/images/banners/top-menu-banner1.jpg"></a> </div>
                                                    </div>
                                                    <!-- /.row -->
                                                </div>
                                                <!-- /.yamm-content -->
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown hidden-sm"> <a href="category.html">Health & Beauty </a> </li>
                                    <li class="dropdown hidden-sm"> <a href="category.html">Watches</a> </li>
                                    <li class="dropdown"> <a href="contact.html">Jewellery</a> </li>
                                    <li class="dropdown"> <a href="contact.html">Shoes</a> </li>
                                    <li class="dropdown"> <a href="contact.html">Kids & Girls</a> </li>
                            
                                </ul>
                                <!-- /.navbar-nav -->
                                <div class="clearfix"></div>
                            </div>
                            <!-- /.nav-outer -->
                        </div>
                        <!-- /.navbar-collapse -->

                    </div>
                    <!-- /.nav-bg-class -->
                </div>
                <!-- /.navbar-default -->
            </div>
            <!-- /.container-class -->

        </div>
        <!-- /.header-nav -->
        <!-- ============================================== NAVBAR : END ============================================== -->

    </header>

    <!-- ============================================== HEADER : END ============================================== -->