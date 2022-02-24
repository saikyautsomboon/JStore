<?php
require '../dbconnected.php';
require('backendheader.php');

$sql="SELECT subcategories.*,categories.id as cid, categories.name as cname
FROM subcategories
LEFT JOIN categories
ON subcategories.category_id=categories.id
ORDER BY name";

$stmt = $conn->prepare($sql);
$stmt->execute();
$subcategories = $stmt->fetchAll();


?>
<div class="content-wrapper ">
    <!-- Content Header (Page header) -->
    <div class="content-heade mx-4">
        <div class="container-fluid ">
            <div class="row mb-2">
                <div class="col-sm-9">
                    <h1 class="m-0">Sub-Category</h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-2 my-3">
                    <a href="subcategory_new.php" class="btn btn-primary">
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
                                                <th>Name</th>
                                                <th>Category ID</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $i = 1;
                                            foreach ($subcategories as $subcategory) {
                                                $id = $subcategory['id'];
                                                $name = $subcategory['name'];
                                                $cid = $subcategory['category_id'];
                                                $cname = $subcategory['cname'];

                                            ?>
                                                <tr>
                                                    <td><?php echo $i++; ?></td>
                                                    <td><?php echo $name; ?></td>
                                                    <td><?php echo $cname; ?></td>
                                                    <td>
                                                        <a href="subcategory_edit.php?id=<?= $id ?>" class="btn btn-primary">
                                                            <i class="fas fa-cog"></i>
                                                        </a>
                                                        <!-- a tag is get method  -->
                                                        <form method="POST" action="subcategory_delete.php" onsubmit="return confirm('Are you sure you want to delete!')" class="d-inline-block">
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