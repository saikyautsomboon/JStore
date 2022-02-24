<?php
 require '../dbconnected.php';

 $name=$_POST['name'];
 $categoryid=$_POST['categoryid'];
//  var_dump($name,$categoryid);

$sql="INSERT INTO subcategories (name, category_id) VALUES (:value1, :value2)";

$stmt = $conn->prepare($sql);

$stmt->bindParam(':value1',$name);
$stmt->bindParam(':value2',$categoryid);

$stmt->execute();


header('Location: subcategory.php');
?>