<?php
require '../dbconnected.php';
$id=$_GET['id'];

if($_GET['status']==0){
    $status='Confirm';

}
elseif($_GET['status']==1){
    $status='Delete';
}

$sql="UPDATE orders SET status=:status WHERE id=:id";
$stmt=$conn->prepare($sql);

$stmt->bindParam(':status',$status);
$stmt->bindParam('id',$id);
$stmt->execute();

header ('Location: order_list.php');