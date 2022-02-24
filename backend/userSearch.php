<?php 
require '../dbconnected.php';

$search=$_POST['search'];

$sql = "SELECT * FROM users WHERE name=:search OR phone=:search OR email=:search OR address=:search OR email=:search";

$stmt=$conn->prepare($sql);
$stmt->bindParam(':search',$search);
$stmt->execute();

$searchResult = $stmt->fetchAll();
echo json_encode($searchResult);
?>