<?php

require '../dbconnected.php';
require('backendheader.php');

$orderid = $_GET['id'];
$userid = $_GET['user_id'];

$sql = "SELECT item_order.*,orders.id as oid, orders.total as ototal, orders.user_id as ouid,items.id as iid,
items.codeno as icode ,items.name as iname,items.photo as iphoto, items.price as iprice ,items.discount as idiscount,items.description as idescription ,
users.id as uid ,users.name as uname,users.photo as uphoto, users.address as uaddress,users.email as uemail ,users.phone as uphone ,users.status as ustatus
FROM item_order 
LEFT JOIN orders 
ON item_order.order_id=orders.id 
RIGHT JOIN items 
ON item_order.item_id=items.id 
RIGHT JOIN users 
ON orders.user_id=users.id 
WHERE item_order.order_id=:orderid AND orders.user_id=:userid";

$stmt = $conn->prepare($sql);
$stmt->bindParam(':orderid', $orderid);
$stmt->bindParam(':userid', $userid);
$stmt->execute();
$showorderitems = $stmt->fetchAll();

$sql = "SELECT * FROM users";
$stmt = $conn->prepare($sql);
$stmt->execute();
$users = $stmt->fetch(PDO::FETCH_ASSOC);


$sql = "SELECT orders.*,users.id as uid ,users.name as uname,users.photo as uphoto,
users.phone as uphone ,users.address as uaddress ,users.email as uemail
FROM orders
RIGHT JOIN users
ON orders.user_id = users.id
WHERE orders.user_id = :userid";

$stmt = $conn->prepare($sql);
$stmt->bindParam(':userid', $userid);
$stmt->execute();

$showuserids = $stmt->fetch(PDO::FETCH_ASSOC);

$sql = "SELECT * FROM `orders` WHERE id=:orderid AND user_id=:userid";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':orderid', $orderid);
$stmt->bindParam(':userid', $userid);
$stmt->execute();

$iteminvoice = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<div class="content-wrapper ">
    <!-- Content Header (Page header) -->
    <div class="content-heade mx-4">
        <div class="container-fluid ">
            <div class="row mb-2">
                <div class="col-sm-9">
                    <i class="fas fa-file-invoice-dollar text-gray fa-3x"></i>
                    <label class="m-0 display-3 text-gray">Inovies</label>
                    <p><i>A Printable Invoice Format</i></p>
                </div>
                <!-- /.col -->

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
                                        <div class="row">
                                            <div class="col-md-8  my-3">
                                                <h1>Admin Inc</h1>
                                            </div>
                                            <div class="col-md-4 my-3">
                                                <h1>Date: 01/01/2019</h1>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <h4>Form</h4>
                                                <p>Name :<i>&emsp;<?= $users['name']; ?></i> </p>
                                                <p>Phone no :&emsp;<?= $users['phone']; ?> </p>
                                                <p>Address :&emsp;<?= $users['address']; ?> </p>
                                                <p>Email :&emsp;<?= $users['email']; ?> </p>

                                            </div>
                                            <div class="col-md-4">
                                                <h4>To</h4>
                                                <p>Name :<i>&emsp;<?= $showuserids['uname'] ?></i></p>
                                                <p>Address :&emsp;<?= $showuserids['uaddress'] ?></p>
                                                <p>Phone Number :&emsp;<?= $showuserids['uphone'] ?></p>
                                                <p>Email :&emsp;<?= $showuserids['uemail'] ?></p>
                                            </div>
                                            <div class="col-md-4">
                                                <h4>Voucher no : #<?= $iteminvoice['voucherno'] ?></h4>

                                                <p>Payment Time : <?= $iteminvoice['created_at']?></p>
                                                <?php

                                                $total=0;
                                                $subtotal=0;

                                                foreach($showorderitems as $showorderitem){
                                                    $qty = (int)$showorderitem['qty']; 
                                                    $iprice = (int)$showorderitem['iprice'];
                                                    $idiscount = (int)$showorderitem['idiscount'];
                                                    $subtotal = ($qty * $iprice) - $idiscount;

                                                    $total +=$subtotal;
                                                }
                                                ?>
                                                <p>Amount : <?= $total?></p>
                                            </div>

                                        </div>
                                </div>
                                <tbody>

                                    <tr>
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th scope="col">No</th>
                                                    <th scope="col">Product Name</th>
                                                    <th scope="col">Product Photo</th>
                                                    <th scope="col">Qty</th>
                                                    <th scope="col" >Price</th>
                                                    <th scope="col" >Discount</th>
                                                    <th scope="col">Description</th>
                                                    <th scope="col">Subtotal</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $subtotal = 0;
                                                $i = 1;
                                                foreach ($showorderitems as $showorderitem) {
                                                    $id = $showorderitem['id'];
                                                    $qty = (int)$showorderitem['qty'];
                                                    $iname = $showorderitem['iname'];
                                                    $iphoto = $showorderitem['iphoto'];
                                                    $idescription = $showorderitem['idescription'];
                                                    $iprice = (int)$showorderitem['iprice'];
                                                    $idiscount = (int)$showorderitem['idiscount'];
                                                    $subtotal = ($qty * $iprice) - $idiscount;
                                                ?>
                                                    <tr>
                                                        <th scope="row"><?= $i++ ?></th>
                                                        <td><?= $iname ?></td>
                                                        <td class="image col-md-3">
                                                            <img src="<?= $iphoto ?>" class="img-fluid">
                                                        </td>
                                                        <td><?= $qty;?></td>
                                                        <td><?= $iprice;?></td>
                                                        <td><?= $idiscount;?></td>
                                                        <td><?= $idescription; ?></td>
                                                        <td><?= $subtotal; ?></td>
                                                    </tr>
                                                <?php } ?>

                                            </tbody>
                                        </table>
                                    </tr>
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