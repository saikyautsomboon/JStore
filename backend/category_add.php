<?php 
require '../dbconnected.php';

    $name=$_POST['name'];
    $photo=$_FILES['photo'];

  $bathphoto='images/category/';
 
  $fullpath=$bathphoto.$photo['name'];


 move_uploaded_file($photo['tmp_name'],$fullpath);
 

  $sql="INSERT INTO categories(name, logo) VALUES (:value1,:value2)";

  $stmt=$conn->prepare($sql);

  $stmt->bindParam(':value1',$name);
  $stmt->bindParam(':value2',$fullpath);
  $stmt->execute();

  header("Location: category.php");

?>