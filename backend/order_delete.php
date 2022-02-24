<?php
    require "../dbconnected.php";

    $id=$_POST['id'];

    $sql="DELETE FROM item_order Where order_id = :id";
    $stmt=$conn->prepare($sql);
    $stmt->bindParam(':id',$id);
    $stmt->execute();


    $sql="DELETE FROM orders Where id = :id";
    $stmt=$conn->prepare($sql);
    $stmt->bindParam(':id',$id);
    $stmt->execute();

    
    header("Location:order_list.php");