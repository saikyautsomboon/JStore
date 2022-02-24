<?php
require '../dbconnected.php';

$code = trim($_POST['code']);
$name = trim($_POST['name']);
$photo = $_FILES['photo'];
$secphoto = count($_FILES['secphoto']['name']);
$price = trim($_POST['price']);
$discount = trim($_POST['discount']);
$description = trim($_POST['description']);
$brandid = trim($_POST['brandid']);
$subcategoryid = trim($_POST['subcategoryid']);


$bathphoto = 'images/items/';

$fullpath = $bathphoto . $photo['name'];

move_uploaded_file($photo['tmp_name'], $fullpath);

$sql = "INSERT INTO items(codeno, name, photo, price, discount, description,brand_id, subcategory_id)
            VALUES (:codeno,:name,:photo,:price,:discount,:description,:brandid,:subcategoryid)";

$stmt = $conn->prepare($sql);

$stmt->bindParam(':codeno', $code);
$stmt->bindParam(':name', $name);
$stmt->bindParam(':photo', $fullpath);
$stmt->bindParam(':price', $price);
$stmt->bindParam(':discount', $discount);
$stmt->bindParam(':description', $description);
$stmt->bindParam(':brandid', $brandid);
$stmt->bindParam(':subcategoryid', $subcategoryid);

$stmt->execute();

$itemsid = $conn->lastInsertId();

// upload for multiple image items 
for ($i = 0; $i < $secphoto; $i++) {


    $imagename = $_FILES['secphoto']['name'][$i];
    $tmpname = $_FILES['secphoto']['tmp_name'][$i];

    $bathphoto = 'images/items/itemdetail/';
    $targetpath = $bathphoto . $imagename;
    move_uploaded_file($tmpname, $targetpath);

    $secsql = "INSERT INTO item_detail(photo,item_id) VALUES (:value1,:value2)";
    $secstmt = $conn->prepare($secsql);

    $secstmt->bindParam(':value1', $targetpath);
    $secstmt->bindParam(':value2', $itemsid);
    $secstmt->execute();
}


header('Location: items.php');
