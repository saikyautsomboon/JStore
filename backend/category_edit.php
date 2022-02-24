<?php require '../dbconnected.php';
$id = $_GET['id'];
$sql = "Select * from categories WHERE id=:id";

$stmt = $conn->prepare($sql);
$stmt->bindParam(':id', $id);

$stmt->execute();

$category = $stmt->fetch(PDO::FETCH_ASSOC);
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
                        <form action="category_update.php" method="POST" enctype="multipart/form-data">
                        <input type='hidden' name="id" value="<?= $category['id'] ?>">
                        <input type='hidden' name='oldphoto' value="<?= $category['logo'] ?>">
                            <div class="form-group row">
                                <label for="name_id" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10"><input type="text" class="form-control" placeholder="" id="name_id" name="name" value="<?= $category['name'] ?>"></div>

                            </div>
                            <div class="form-group row">
                                <label for="photo_id" class="col-sm-2 control-label">Photo</label>
                                <div class="col-sm-10">
                                    <nav>
                                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link active" id="photo-tab" data-toggle="tab" href="#photo" role="tab" aria-controls="photo" aria-selected="true">Old Photo</a>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link" id="newphoto-tab" data-toggle="tab" href="#newphoto" role="tab" aria-controls="newphoto" aria-selected="false">New Photo</a>
                                                </li>

                                            </ul>
                                            <div class="tab-content my-3 " id="myTabContent">
                                                <div class="tab-pane fade show active" id="photo" role="tabpanel" aria-labelledby="photo-tab" >
                                                    <img src="<?php echo $category['logo'] ?>" class="img-fluid">

                                                </div>
                                                <div class="tab-pane fade" id="newphoto" role="tabpanel" aria-labelledby="newphoto-tab">
                                                    <input type="file" id="photo_id" name="newphoto" class="mx-3">
                                                </div>

                                            </div>

                                        </div>
                                    </nav>
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