<?php
require '../dbconnected.php';
require('backendheader.php');


$sql = "SELECT items.*,brands.id as bid,brands.name as bname , subcategories.id as sid,subcategories.name as sname
FROM items
LEFT JOIN brands
ON items.brand_id=brands.id
LEFT JOIN subcategories 
ON items.subcategory_id=subcategories.id
ORDER BY name";

// $itemsubcategorysql = "SELECT items.*,subcategories.id as sid,subcategories.name as sname
// FROM items
// LEFT JOIN subcategories
// ON items.subcategory_id= subcategories.id
// ORDER BY id ASC";

$stmt = $conn->prepare($sql);
$stmt->execute();
$items = $stmt->fetchAll();

// $itemsubca = $conn->prepare($itemsubcategorysql);
// $itemsubca->execute();
// $itemsubcas = $itemsubca->fetchAll();
?>

<div class="content-wrapper ">
    <!-- Content Header (Page header) -->
    <div class="content-heade mx-4">
        <div class="container-fluid ">
            <div class="row mb-2">
                <div class="col-sm-9">
                    <h1 class="m-0">ITems</h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-2 my-3">
                    <a href="item_new.php" class="btn btn-primary">
                        <i class="fas fa-plus-circle"></i>
                    </a>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="offset-md-0 col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title">
                            <div class="title-body">
                                <div class="table-responsive">
                                    <table class="table table-hover table-bordered" id="sampleTabel">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Code No:</th>
                                                <th>Name</th>
                                                <th>Photo</th>
                                                <th>Price</th>
                                                <th>Discount</th>
                                                <th>Description</th>
                                                <th>Brands</th>
                                                <th>Sub_Category</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $i = 1;
                                            foreach ($items as $item) {
                                                $id = $item['id'];
                                                $codeno = $item['codeno'];
                                                $name = $item['name'];
                                                $photo = $item['photo'];
                                                $price = $item['price'];
                                                $discount = $item['discount'];
                                                $description = $item['description'];
                                                $bid = $item['brand_id'];
                                                $bname = $item['bname'];
                                                $sid = $item['subcategory_id'];
                                                $sname = $item['sname'];


                                            ?>
                                                <tr>
                                                    <td><?php echo $i++; ?></td>
                                                    <td><?php echo $codeno; ?></td>
                                                    <td><?php echo $name; ?></td>
                                                    <td class="image col-md-3">
                                                        <img src="<?php echo $photo ?>" class="img-fluid">
                                                    </td>
                                                    <td><?php echo $price; ?></td>
                                                    <td><?php echo $discount; ?></td>
                                                    <td><?php echo $description; ?></td>
                                                    <td><?php echo $bname; ?></td>

                                                    <td><?php echo $sname ?></td>


                                                    <td>
                                                        <a href="item_edit.php?id=<?= $id ?>" class="btn btn-primary">
                                                            <i class="fas fa-cog"></i>
                                                        </a>
                                                        <!-- a tag is get method  -->
                                                        <form method="POST" action="item_delete.php" onsubmit="return confirm('Are you sure you want to delete!')" class="d-inline-block">
                                                            <input type="hidden" name="id" value="<?= $id ?>">
                                                            <button type="" class="btn btn-danger">
                                                                <i class="fas fa-times-circle"></i>
                                                            </button>
                                                        </form>

                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>


    <!-- Main content -->

</div>
<!-- ./wrapper -->
<?php require('backendfooter.php'); ?>