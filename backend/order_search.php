<?php
require '../dbconnected.php';


$start=$_POST['start'];
$end=$_POST['end'];

$sql = "SELECT orders.*,users.id as uid ,users.name as uname
FROM orders 
LEFT JOIN users 
ON orders.user_id = users.id
WHERE orderdate Between :start AND :end";

$stmt=$conn->prepare($sql);
$stmt->bindParam(':start',$start);
$stmt->bindParam(':end',$end);
$stmt->execute();


$searchResult = $stmt->FetchAll();

echo json_encode($searchResult);
