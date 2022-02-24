<?php 
session_start();
require 'dbconnected.php';

$items =$_POST['items']; //ဟိုဘက်ကပို့လာတဲ့ Key ကို ယူတယ်
$note=$_POST['note'];
$total=$_POST['total'];
// var_dump($items,$note,$total);

date_default_timezone_set("Asia/Rangon");
$orderdate=date("Y-m-d");

$voucherno=strtotime(date('h:i:s'));
$status ='Orders';

$userid=$_SESSION['login_user']['id'];

$sql="INSERT INTO orders (orderdate, voucherno, total, note, status,user_id) 
VALUES (:orderdate,:voucherno,:total,:note,:status,:userid)";
var_dump($sql);

$stmt=$conn->prepare($sql);
var_dump($stmt);

$stmt->bindParam(':orderdate',$orderdate);
$stmt->bindParam(':voucherno',$voucherno);
$stmt->bindParam(':total',$total);
$stmt->bindParam(':note',$note);
$stmt->bindParam(':status',$status);
$stmt->bindParam(':userid',$userid);

$stmt->execute();

// နောက်ဆံုးကဝင်ထားတဲ့ Order id ကို ယူ
$orderid=$conn->lastInsertId();
    
    foreach ($items as $item) {
        $id=$item['id'];
        $qty=$item['qty'];

        $sql="INSERT INTO item_order(qty, item_id, order_id) 
        VALUES (:qty, :itemid, :orderid)";

        $stmt=$conn->prepare($sql);

        $stmt->bindParam(':qty',$qty);
        $stmt->bindParam(':itemid',$id);
        $stmt->bindParam(':orderid',$orderid);

        $stmt->execute();
    }




