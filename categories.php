<?php require "dbconnected.php";
$sql = "SELECT * FROM categories ORDER BY id";
$stmt = $conn->prepare($sql);

$stmt->execute();
$categories = $stmt->fetchAll();

$sql = "SELECT * FROM brands ORDER BY id";
$stmt = $conn->prepare($sql);
$stmt->execute();

$brands = $stmt->fetchAll();

?>






<!-- ================================== TOP NAVIGATION ================================== -->
<div class="side-menu animate-dropdown outer-bottom-xs ">
    <div class="head"><i class="icon fa fa-align-justify fa-fw"></i> Categories</div>

    <nav class="yamm megamenu-horizontal">
        <ul class="nav">
            <?php
            foreach ($categories as $category) {
                $cid = $category['id'];
                $cname = $category['name'];
            ?>
                <li class="dropdown menu-item"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?= $cname; ?></a>
                    <ul class="dropdown-menu mega-menu">
                        <li class="yamm-content">
                            <div class="row">
                                <div class="col-sm-12 col-md-3">
                                    <h4><?= $cname; ?></h4>
                                    <ul class="links list-unstyled">
                                        <?php 
                                            $sql= "SELECT * FROM subcategories Where category_id =:categoryid ORDER BY name";
                                            $stmt=$conn->prepare($sql);
                                            $stmt->bindParam(':categoryid',$cid);
                                            $stmt->execute();

                                            $subcategories=$stmt->fetchAll();
                                            // subcategories 
                                            foreach ($subcategories as $subcategory){
                                                $scid=$subcategory['id'];
                                                $scname=$subcategory['name'];
                                        ?>
                                        <li><a href="subcategory.php?id=<?= $scid?>"><?= $scname;?></a></li>
                                        <?php }?>
                                        
                                    </ul>
                                </div>
                                
                            </div>
                            <!-- /.row -->
                        </li>
                        <!-- /.yamm-content -->
                    </ul>
                    <!-- /.dropdown-menu -->
                </li>
            <?php } ?>
            <!-- /.menu-item -->



        </ul>
        <!-- /.nav -->
    </nav>
    <!-- /.megamenu-horizontal -->
</div>
<!-- /.side-menu -->
<!-- ================================== TOP NAVIGATION : END ================================== -->