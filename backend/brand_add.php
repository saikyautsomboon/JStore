<?php

require "../dbconnected.php";
    $name=$_POST['name'];
    $logo=$_FILES['logo'];

    $bathphoto='images/brands/';
    $fullpath=$bathphoto.$logo['name'];

    move_uploaded_file($logo['tmp_name'],$fullpath);

    $sql="INSERT INTO brands(name,logo) VALUES (:value1 ,:value2)";

    $stmt=$conn->prepare($sql);

    $stmt->bindParam(':value1',$name);
    $stmt->bindParam(':value2',$fullpath);

    $stmt->execute();

    header('Location: brands.php');

    // var_dump($name,$logo);
?>