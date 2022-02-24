<?php
require "../dbconnected.php";

$id = $_POST['id'];
$name = $_POST['name'];

$oldphoto = $_POST['oldphoto'];
$newphoto = $_FILES['newphoto'];

if ($newphoto['size'] > 0) {
    $bathphoto = 'images/brands/';
    $fullpath = $bathphoto . $newphoto['name'];

    move_uploaded_file($newphoto['tmp_name'], $fullpath);
} else {
    $fullpath = $oldphoto;
}

$sql = "UPDATE brands SET name=:newname,logo=:newlogo WHERE id=:id";

$stmt = $conn->prepare($sql);
$stmt->bindParam(':newname', $name);
$stmt->bindParam(':newlogo', $fullpath);

$stmt->bindParam(':id', $id);

$stmt->execute();

header('Location: brands.php');
