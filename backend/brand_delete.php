<?php
    require "../dbconnected.php";

    $id=$_POST['id'];

    $sql="DELETE FROM brands Where id=:id";

    $stmt=$conn->prepare($sql);

    $stmt->bindParam(':id',$id);

    $stmt->execute();

header('Location: brands.php');