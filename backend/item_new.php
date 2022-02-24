
<?php require'../dbconnected.php';
    $brandsql="SELECT * FROM brands ORDER BY name";
    $stmt=$conn->prepare($brandsql);
    $stmt->execute();
    $brands =$stmt->fetchAll();

    $subcategory_sql = "SELECT * FROM subcategories ORDER BY name";
    $scstmt=$conn->prepare($subcategory_sql);
    $scstmt->execute();

    $subcategories= $scstmt->fetchAll();


?>

<?php require('backendheader.php'); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->


    <div class="content-heade mx-4">
        <div class="container-fluid ">
            <div class="row mb-4 ">
                <div class="col-sm-9 ">
                    <h1 class="m-0">ITEMs Form</h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-3 my-3 ">
                    <a href="items.php" class="btn btn-primary">
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
                        <form action="item_add.php" method="POST" enctype="multipart/form-data">
                            <div class="form-group row">
                                <label for="code_id" class="col-sm-2 col-form-label">Code No:</label>
                                <div class="col-sm-10"><input type="text" class="form-control" placeholder="" id="code_id" name="code"></div>

                            </div>
                            <div class="form-group row">
                                <label for="name_id" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10"><input type="text" class="form-control" placeholder="" id="name_id" name="name"></div>

                            </div>
                            <div class="form-group row">
                                <label for="photo_id" class="col-sm-2 control-label">Item Photo</label>
                                <input type="file" id="photo_id" name="photo">
                                <!-- <input type="file" id="photo" name="photo"> -->
                            </div>
                            <div class="form-group row">
                                <label for="photo_id" class="col-sm-2 control-label">Second Item Photo</label>
                                <input type="file" id="secphoto_id" name="secphoto[]" multiple>
                                <!-- <input type="file" id="photo" name="photo"> -->
                            </div>
                            
                            <div class="form-group row">
                                <label for="price_id" class="col-sm-2 col-form-label">Price</label>
                                <div class="col-sm-10"><input type="text" class="form-control" placeholder="" id="price_id" name="price"></div>

                            </div>
                            <div class="form-group row">
                                <label for="discount_id" class="col-sm-2 col-form-label">Discount</label>
                                <div class="col-sm-10"><input type="text" class="form-control" placeholder="" id="discount_id" name="discount"></div>

                            </div>
                            <div class="form-group row">
                                <label for="description_id" class="col-sm-2 col-form-label">Description</label>
                                <div class="col-sm-10">
                                <textarea class="form-control"  placeholder="Enter Product Detail" id="description_id" name="description"></textarea>
                            </div>

                            </div>
                            <div class="form-group row">
                                <label for="brand_id" class="col-sm-2 col-form-label">Brand ID</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="brandid">
                                        <?php foreach ($brands as $brand) {
                                            $id = $brand['id'];
                                            $name = $brand['name'];

                                        ?>
                                            <option value="<?= $id; ?>"><?= $name; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>

                            </div>
                            <div class="form-group row">
                                <label for="subcategory_id" class="col-sm-2 col-form-label">SubCategory ID</label> 
                                <div class="col-sm-10">
                                    <select class="form-control" name="subcategoryid">
                                        <?php foreach ($subcategories as $subcategory) {
                                            $id = $subcategory['id'];
                                            $name = $subcategory['name'];

                                        ?>
                                            <option value="<?= $id; ?>"><?= $name; ?></option>
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