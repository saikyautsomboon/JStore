<?php
require '../dbconnected.php';

$id=$_POST['id'];
// var_dump($id);
 $sql="DELETE FROM categories WHERE id = :id1";

 $stmt=$conn->prepare($sql);
 $stmt->bindParam(':id1',$id);
 $stmt->execute();

 header("Location: category.php");

 ?>