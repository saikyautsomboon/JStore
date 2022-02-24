<?php
require '../dbconnected.php';
require('backendheader.php');

date_default_timezone_set('Asia/Rangoon');
$today = date('Y-m-d');

$orderStatus = "Orders";
$confirmStatus = "Confirm";

$deleteStatus = "Delete";


$sql = "SELECT orders.*, users.id as uid,users.name as uname
FROM orders 
LEFT JOIN users
ON orders.user_id=users.id
WHERE orders.status =:status
ORDER BY created_at DESC";
$stmt = $conn->prepare($sql);
$stmt->bindParam(":status", $orderStatus);
$stmt->execute();
$pending_orders = $stmt->fetchAll();


$sql = "SELECT orders.*, users.id as uid,users.name as uname
FROM orders 
LEFT JOIN users
ON orders.user_id=users.id
WHERE orders.status =:status
ORDER BY created_at DESC";
$stmt = $conn->prepare($sql);
$stmt->bindParam(":status", $confirmStatus);
$stmt->execute();
$confirm_orders = $stmt->fetchAll();


$sql = "SELECT orders.*, users.id as uid,users.name as uname
FROM orders 
LEFT JOIN users
ON orders.user_id=users.id
WHERE orders.status =:status
ORDER BY created_at DESC";
$stmt = $conn->prepare($sql);
$stmt->bindParam(":status", $deleteStatus);
$stmt->execute();
$cancel_orders = $stmt->fetchAll();
?>

<div class="content-wrapper ">
    <!-- Content Header (Page header) -->
    <div class="content-heade mx-4">
        <div class="container-fluid ">
            <div class="row mb-2">
                <div class="col-sm-9">
                    <h1 class="m-0">Order</h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-2 my-3">
                    <a href="category_new.php" class="btn btn-primary">
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
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="title">
                        <div class="title-body">
                            <h1>Search Order History</h1>
                            <form class="row">
                                <div class="form-group col-md-5">
                                    <label class="control-label">Start Date</label>
                                    <input type="date" class="form-control" id="startDate">
                                </div>
                                <div class="form-group col-md-5">
                                    <label class="control-label">End Date</label>
                                    <input type="date" class="form-control" id="endDate">
                                </div>
                                <div class="form-group col-md-2 align-self-end">
                                    <button class="btn btn-primary searchbtn" type="button">Search</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
    <ul class="nav nav-tabs my-3 mx-2" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link active" id="pendingorder-tab" data-toggle="tab" href="#pendingorder" role="tab" aria-controls="pendingorder" aria-selected="true">Pending Order</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="confirmorder-tab" data-toggle="tab" href="#confirmorder" role="tab" aria-controls="confirmorder" aria-selected="false">Confirm Order</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="cancelorder-tab" data-toggle="tab" href="#cancelorder" role="tab" aria-controls="cancelorder" aria-selected="false">Cancel Order</a>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="pendingorder" role="tabpanel" aria-labelledby="pendingorder-tab">
            <div class="offset-md-0 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="title">
                                    <div class="title-body" id='todayorderlist'>
                                        <h3>Order List</h3>
                                        <div class="table-responsive">

                                            <table class="table table-hover table-bordered display">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>User Name</th>
                                                        <th>Status</th>
                                                        <th>Date</th>
                                                        <th>Voucher No</th>
                                                        <th>Total</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $i = 1;
                                                    foreach ($pending_orders as $order) {
                                                        $id = $order['id'];
                                                        $orderdate = $order['orderdate'];
                                                        $voucher = $order['voucherno'];
                                                        $total = $order['total'];
                                                        $status = $order['status'];
                                                        $uid = $order['user_id'];
                                                        $uname = $order['uname'];

                                                    ?>
                                                        <tr>
                                                            <td><?php echo $i++; ?></td>

                                                            <td><?php echo $uname; ?></td>
                                                            <td><?php echo $status; ?></td>
                                                            <td><?php echo $orderdate; ?></td>
                                                            <td><?php echo $voucher; ?></td>
                                                            <td><?php echo $total; ?></td>
                                                            <td>
                                                                <a href="order_detail.php?id=<?= $id ?>&user_id=<?= $uid ?>" class="btn btn-primary">
                                                                    <i class="fas fa-cog"></i>
                                                                </a>
                                                                <a href="changeorder_status.php?id=<?= $id ?>&status=0" class="btn btn-success">
                                                                    <i class="fas fa-check"></i>
                                                                </a>
                                                                <!-- a tag is get method  -->
                                                                <a href="changeorder_status.php?id=<?= $id ?>&status=1" class="btn btn-danger">
                                                                    <i class="fas fa-times-circle"></i>
                                                                </a>
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
        </div>
        <div class="tab-pane fade" id="confirmorder" role="tabpanel" aria-labelledby="confirmorder-tab">
            <div class="offset-md-0 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="title">
                                    <div class="title-body">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-bordered display">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>User Name</th>
                                                        <th>Status</th>
                                                        <th>Date</th>
                                                        <th>Voucher No</th>
                                                        <th>Total</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $i = 1;
                                                    foreach ($confirm_orders as $order) {
                                                        $id = $order['id'];
                                                        $orderdate = $order['orderdate'];
                                                        $voucher = $order['voucherno'];
                                                        $total = $order['total'];
                                                        $status = $order['status'];
                                                        $uid = $order['user_id'];
                                                        $uname = $order['uname'];
                                                    ?>
                                                        <tr>
                                                            <td><?php echo $i++; ?></td>
                                                            <td><?php echo $uname; ?></td>
                                                            <td><?php echo $status; ?></td>
                                                            <td><?php echo $orderdate; ?></td>
                                                            <td><?php echo $voucher; ?></td>
                                                            <td><?php echo $total; ?></td>
                                                            <td>
                                                                <a href="order_detail.php?id=<?= $id ?>&user_id=<?= $uid ?>" class="btn btn-primary">
                                                                    <i class="fas fa-cog"></i>
                                                                </a>
                                                                <!-- a tag is get method  -->
                                                                <a href="changeorder_status.php?id=<?= $id ?>&status=1" class="btn btn-danger">
                                                                    <i class="fas fa-times-circle"></i>
                                                                </a>

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
        </div>
        <div class="tab-pane fade" id="cancelorder" role="tabpanel" aria-labelledby="cancelorder-tab">
            <div class="offset-md-0 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="title">
                                    <div class="title-body">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-bordered display">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Order Id</th>
                                                        <th>User Id</th>
                                                        <th>User Name</th>
                                                        <th>Status</th>
                                                        <th>Date</th>
                                                        <th>Voucher No</th>
                                                        <th>Total</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $i = 1;
                                                    foreach ($cancel_orders as $order) {
                                                        $id = $order['id'];
                                                        $orderdate = $order['orderdate'];
                                                        $voucher = $order['voucherno'];
                                                        $total = $order['total'];
                                                        $status = $order['status'];
                                                        $uid = $order['user_id'];
                                                        $uname = $order['uname'];

                                                    ?>
                                                        <tr>
                                                            <td><?php echo $i++; ?></td>
                                                            <td><?= $id ?></td>
                                                            <td><?= $uid; ?></td>
                                                            <td><?php echo $uname; ?></td>
                                                            <td><?php echo $status; ?></td>
                                                            <td><?php echo $orderdate; ?></td>
                                                            <td><?php echo $voucher; ?></td>
                                                            <td><?php echo $total; ?></td>
                                                            <td>
                                                                <a href="order_detail.php?id=<?= $id ?>&user_id=<?= $uid ?>" class="btn btn-primary">
                                                                    <i class="fas fa-cog"></i>
                                                                </a>
                                                                <!-- a tag is get method  -->
                                                                <form method="POST" action="order_delete.php" onsubmit="return confirm('Are you sure you want to delete!')" class="d-inline-block">
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
        </div>
    </div>
    <!-- Main content -->

</div>
<!-- ./wrapper -->
<?php require('backendfooter.php'); ?>