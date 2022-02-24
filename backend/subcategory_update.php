<?php
    require "../dbconnected.php";

    $id=$_POST['id'];
    $name=$_POST['name'];
    $categoryid=$_POST['categoryid'];


    // var_dump($id,$name,$categoryid);

    $sql="UPDATE subcategories SET name=:name,category_id=:categoryid WHERE id=:id";
    
    $stmt=$conn->prepare($sql);
    $stmt->bindValue(':name',$name);
    $stmt->bindValue(':categoryid',$categoryid);
    $stmt->bindParam(':id',$id);
    $stmt->execute();

    header("Location: subcategory.php");