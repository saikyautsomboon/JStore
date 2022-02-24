<?php require '../dbconnected.php';
$sql = "SELECT * FROM categories";
$stmt = $conn->prepare($sql);
$stmt->execute();;

$categories = $stmt->fetchAll();

?>
<?php require('backendheader.php'); ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->


    <div class="content-heade mx-4">
        <div class="container-fluid ">
            <div class="row mb-4 ">
                <div class="col-sm-9 ">
                    <h1 class="m-0">Sub-Category Form</h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-3 my-3 ">
                    <a href="subcategory.php" class="btn btn-primary">
                        <i class="fas fa-chevron-circle-left"></i>
                    </a>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="offset-md-2 col-md-8">
        <div class="row">
            <div class="col-md-12 mx-auto">
                <div class="title">
                    <div class="title-body mx-4">
                        <form action="subcategory_add.php" method="POST" enctype="multipart/form-data">
                            <div class="form-group row">
                                <label for="name_id" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10"><input type="text" class="form-control" placeholder="" id="name_id" name="name"></div>

                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Category</label>
                                <div class="col-sm-10">
                                <select class="form-control" name="categoryid">
                                    <?php foreach ($categories as $category) {
                                        $id = $category['id'];
                                        $name = $category['name'];

                                    ?>
                                        <option value="<?= $id;?>"><?= $name; ?></option>
                                    <?php } ?>
                                </select>
                                </div>
                                
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fas fa-save"></i> Save
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>

    </div>


</div>
<!-- ./wrapper -->
<?php require('backendfooter.php'); ?>