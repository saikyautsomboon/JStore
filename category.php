<?php require 'frontendheader.php';
require 'dbconnected.php';

$id=$_GET['id'];
$sql = "SELECT * FROM categories WHERE id=:id";
$stmt=$conn->prepare($sql);
$stmt->bindParam(':id',$id);

$stmt->execute();
$category = $stmt->fetch(PDO::FETCH_ASSOC);

$sql = "SELECT items.*,subcategories.id as sid,subcategories.name as sname,categories.id as cid,categories.name as cname 
FROM items 
LEFT JOIN subcategories 
ON items.subcategory_id = subcategories.id 
LEFT JOIN categories ON subcategories.category_id=categories.id 
WHERE subcategories.category_id=:id ORDER BY rand()";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->execute();

$items = $stmt->fetchAll();
?>
<div class="body-content outer-top-vs" id="top-banner-and-menu">
    <div class="container" id="showitme">
        <div class="row">
            <!-- ============================================== Show all Items ========================================================= -->
                <div class="clearfix filters-container m-t-10">
                    <div class="row">
                        <div class="col col-sm-6 col-md-3 col-lg-3 col-xs-6">
                            <div class="filter-tabs">
                                <h1><?= $category['name']?></h1>
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
<?php require 'frontendfooter.php'?>
