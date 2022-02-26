<?php require 'frontendheader.php';
require 'dbconnected.php';

$subcategory_id = $_GET['id'];

$sql = "SELECT * FROM subcategories WHERE id = :id ";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':id', $subcategory_id);
$stmt->execute();
$subcategory = $stmt->fetch(PDO::FETCH_ASSOC);

$subcategory_name = $subcategory['name'];

// ====================================== 

$sql = "SELECT * FROM items WHERE subcategory_id=:subcategoryid ORDER BY rand()";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':subcategoryid', $subcategory_id);
$stmt->execute();

$items = $stmt->fetchAll();
?>
<div class="breadcrumb">
  <div class="container">
    <div class="breadcrumb-inner">
      <ul class="list-inline list-unstyled">
        <li><a href="index.php">Home</a></li>
        <li class='active'>Handbags</li>
      </ul>
    </div>
    <!-- /.breadcrumb-inner -->
  </div>
  <!-- /.container -->
</div>
<!-- /.breadcrumb -->
<div class="body-content outer-top-xs">
  <div class='container'>
    <div class='row'>
      <div class='col-xs-12 col-sm-12 col-md-3 sidebar'>

        <?php require 'categories.php'; ?>
      </div>
      <!-- /.sidebar -->
      <div class="col-xs-12 col-sm-12 col-md-9 rht-col">
        <!-- ========================================== SECTION – HERO ========================================= -->

        <div id="category" class="category-carousel hidden-xs">
          <div class="item">
            <div class="image"> <img src="assets/images/banners/cat-banner-1.jpg" alt="" class="img-responsive"> </div>
            <div class="container-fluid">
              <div class="caption vertical-top text-left">
                <div class="big-text"> Big Sale </div>
                <div class="excerpt hidden-sm hidden-md"> Save up to 49% off </div>
                <div class="excerpt-normal hidden-sm hidden-md"> Lorem ipsum dolor sit amet, consectetur adipiscing elit </div>
                <div class="buy-btn"><a href="#" class="lnk btn btn-primary">Show Now</a></div>
              </div>
              <!-- /.caption -->
            </div>
            <!-- /.container-fluid -->
          </div>
        </div>

        <!-- Grid or List And List by Position  -->
        <div class="clearfix filters-container m-t-5">
          <h1><?= $subcategory_name ?></h1>
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
            

            <div class="col col-sm-6 col-md-4 col-xs-6 col-lg-4 text-right">
              <div class="pagination-container">
                <ul class="list-inline list-unstyled">
                  <li class="prev"><a href="#"><i class="fa fa-angle-left"></i></a></li>
                  <li><a href="#">1</a></li>
                  <li class="active"><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li class="next"><a href="#"><i class="fa fa-angle-right"></i></a></li>
                </ul>
                <!-- /.list-inline -->
              </div>
              <!-- /.pagination-container -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!--Eng\d Grid or List And List by Position  -->
        <div class="search-result-container ">
          <div id="myTabContent" class="tab-content category-list">
            <!-- Grid version  -->
            <div class="tab-pane active " id="grid-container">
              <div class="category-product">
                <div class="row">

                  <!-- show subcategory item  -->
                  <?php
                  foreach ($items as $item) {
                    # code...
                    $id = $item['id'];
                    $name = $item['name'];
                    $price = $item['price'];
                    $discount = $item['discount'];
                    $photo = $item['photo'];
                    $codeno = $item['codeno'];

                  ?>
                    <div class="col-sm-4 col-md-3 col-lg-2">
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
                          </div>
                          <!-- /.product -->

                        </div>
                        <!-- /.products -->
                      </div>
                    </div>
                  <?php } ?>
                  <!-- End Show subcategory item  -->
                </div>
                <!-- /.row -->
              </div>
              <!-- /.category-product -->

            </div>
            <!-- End Grid Version  -->
          </div>
          <!-- /.tab-content -->
          <div class="clearfix filters-container bottom-row">
            <div class="text-right">
              <div class="pagination-container">
                <ul class="list-inline list-unstyled">
                  <li class="prev"><a href="#"><i class="fa fa-angle-left"></i></a></li>
                  <li><a href="#">1</a></li>
                  <li class="active"><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li class="next"><a href="#"><i class="fa fa-angle-right"></i></a></li>
                </ul>
                <!-- /.list-inline -->
              </div>
              <!-- /.pagination-container -->
            </div>
            <!-- /.text-right -->

          </div>
          <!-- /.filters-container -->

        </div>
        <!-- /.search-result-container -->

      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
    <!-- ============================================== BRANDS CAROUSEL ============================================== -->
    <div id="brands-carousel" class="logo-slider">
      <div class="logo-slider-inner">
        <div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">
          <div class="item m-t-15"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand1.png" src="assets/images/blank.gif" alt=""> </a> </div>
          <!--/.item-->

          <div class="item m-t-10"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand2.png" src="assets/images/blank.gif" alt=""> </a> </div>
          <!--/.item-->

          <div class="item"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand3.png" src="assets/images/blank.gif" alt=""> </a> </div>
          <!--/.item-->

          <div class="item"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand4.png" src="assets/images/blank.gif" alt=""> </a> </div>
          <!--/.item-->

          <div class="item"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand5.png" src="assets/images/blank.gif" alt=""> </a> </div>
          <!--/.item-->

          <div class="item"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand6.png" src="assets/images/blank.gif" alt=""> </a> </div>
          <!--/.item-->

          <div class="item"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand2.png" src="assets/images/blank.gif" alt=""> </a> </div>
          <!--/.item-->

          <div class="item"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand4.png" src="assets/images/blank.gif" alt=""> </a> </div>
          <!--/.item-->

          <div class="item"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand1.png" src="assets/images/blank.gif" alt=""> </a> </div>
          <!--/.item-->

          <div class="item"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand5.png" src="assets/images/blank.gif" alt=""> </a> </div>
          <!--/.item-->
        </div>
        <!-- /.owl-carousel #logo-slider -->
      </div>
      <!-- /.logo-slider-inner -->

    </div>
    <!-- /.logo-slider -->
    <!-- ============================================== BRANDS CAROUSEL : END ============================================== -->
  </div>
  <!-- /.container -->

</div>
<!-- /.body-content -->

<?php require 'frontendfooter.php' ?>