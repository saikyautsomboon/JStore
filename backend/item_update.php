<?php
require '../dbconnected.php';

$id = $_POST['id'];
$code = $_POST['code'];
$name = $_POST['name'];
$oldphoto = $_POST['oldphoto'];
$newphoto = $_FILES['newphoto'];
$price = $_POST['price'];
$discount = $_POST['discount'];
$description = $_POST['description'];
$brandid = $_POST['brandid'];
$subcategoryid = $_POST['subcategoryid'];

if ($newphoto['size'] > 0) {

    $bathphoto = 'images/items/';
    $fullpath = $bathphoto . $newphoto['name'];

    move_uploaded_file($newphoto['tmp_name'], $fullpath);
} else {
    $fullpath = $oldphoto;
}


$sql = "UPDATE items SET codeno=:codeno,name=:name,photo=:photo,price=:price,discount=:discount,description=:description,brand_id=:brandid,subcategory_id=:subcategoryid WHERE id=:id";

$stmt = $conn->prepare($sql);
$stmt->bindParam(':codeno', $code);
$stmt->bindParam(':name', $name);
$stmt->bindParam(':photo', $fullpath);
$stmt->bindParam(':price', $price);
$stmt->bindParam(':discount', $discount);
$stmt->bindParam(':description', $description);
$stmt->bindParam(':brandid', $brandid);
$stmt->bindParam(':subcategoryid', $subcategoryid);

$stmt->bindParam(':id',$id);
$stmt->execute();

header("Location: items.php");
