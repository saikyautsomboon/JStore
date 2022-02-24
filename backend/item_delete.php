<?php
    require "../dbconnected.php";

    $id=$_POST['id'];

    $sql="Delete from items where id=:id";
    $stmt=$conn->prepare($sql);

    $stmt->bindParam(':id',$id);
    $stmt->execute();

    header("Location:items.php");