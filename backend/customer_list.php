<?php
require '../dbconnected.php';
require('backendheader.php');


$sql = "SELECT * FROM users";

$stmt = $conn->prepare($sql);
$stmt->execute();
$users = $stmt->fetchAll();

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
                    <h1 class="m-0">Users</h1>
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
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search User Name" aria-label="Search User Name" aria-describedby="search" id="usersearch">
                    <div class="input-group-append">
                        <button class="btn btn-info searchuser" type="button">Search</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="title">
                            <div class="title-body"  id="userTabel">
                                <div class="table-responsive">
                                    <table class="table table-hover table-bordered">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Phone No</th>
                                                <th>Photo</th>
                                                <th>Address</th>
                                                <th>Email</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $i = 1;
                                            foreach ($users as $user) {
                                                $id = $user['id'];
                                                $name = $user['name'];
                                                $phone = $user['phone'];
                                                $photo = $user['photo'];
                                                $address = $user['address'];
                                                $email = $user['email'];

                                            ?>
                                                <tr>
                                                    <td><?php echo $i++; ?></td>

                                                    <td><?php echo $name; ?></td>
                                                    <td><?php echo $phone; ?></td>
                                                    <td class="image col-md-3">
                                                        <img src="<?= '../' . $photo ?>" class="img-fluid">
                                                    </td>
                                                    <td><?php echo $address; ?></td>
                                                    <td><?php echo $email; ?></td>
                                                    <td>
                                                        <a href="user_edit.php?id=<?= $id ?>" class="btn btn-primary">
                                                            <i class="fas fa-cog"></i>
                                                        </a>
                                                        <!-- a tag is get method  -->
                                                        <form method="POST" action="user_delete.php" onsubmit="return confirm('Are you sure you want to delete!')" class="d-inline-block">
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