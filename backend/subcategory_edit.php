<?php require '../dbconnected.php';

$sql = "Select * from categories Order by name";

$stmt = $conn->prepare($sql);
$stmt->execute();
$categories = $stmt->fetchAll();


$id = $_GET['id'];
$sql = 'SELECT * FROM subcategories Where id=:id';

$stmt = $conn->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->execute();

$subcategory = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<?php require('backendheader.php'); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->


    <div class="content-heade mx-4">
        <div class="container-fluid ">
            <div class="row mb-4 ">
                <div class="col-sm-9 ">
                    <h1 class="m-0">Category Edit Form</h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-3 my-3 ">
                    <a href="category.php" class="btn btn-primary">
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
                        <form action="subcategory_update.php" method="POST" enctype="multipart/form-data">
                            <input type='hidden' name="id" value="<?= $subcategory['id'] ?>">
                            
                            <div class="form-group row">
                                <label for="name_id" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10"><input type="text" class="form-control" placeholder="" id="name_id" name="name" value="<?= $subcategory['name'] ?>"></div>

                            </div>
                            <div class="form-group row">
                                <label for="brand_id" class="col-sm-2 col-form-label">Category</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="categoryid">
                                        <?php foreach ($categories as $category) {
                                            $id = $category['id'];
                                            $name = $category['name'];

                                        ?>
                                            <option value="<?= $id; ?>"
                                                <?php if ($id == $subcategory['category_id']) {
                                                            echo 'selected';
                                                        }
                                                ?>>
                                                <?= $name; ?>
                                            </option>
                                        <?php } ?>
                                    </select>
                                </div>

                            </div>


                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fas fa-save"></i> Update
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