<?php

require 'dbconnected.php';
session_start();
$name = trim($_POST['cname']);
$email = trim($_POST['cemail']);
$phone = trim($_POST['cphone']);
$password = trim($_POST['cpassword']);
$confirm = trim($_POST['confirmpassword']);
$address = trim($_POST['caddress']);
$photo = $_FILES['userphoto'];

$status = 0;
$role = 2;

if ($password != $confirm) {
  $_SESSION['fail'] = 'Please Check Your Password!';

  header("Location:sign-in.php");
} else {
  $bathphoto = 'images/users/';
  $fullpath = $bathphoto . $photo['name'];

  move_uploaded_file($photo['tmp_name'], $fullpath);

  $sql = "INSERT INTO users(name, phone, photo, address, email, password,status)
  VALUES (:name,:phone,:photo,:address,:email,:password,:status)";


  $stmt = $conn->prepare($sql);
  $stmt->bindParam(':name', $name);
  $stmt->bindParam(':phone', $phone);
  $stmt->bindParam(':photo', $fullpath);
  $stmt->bindParam(':address', $address);
  $stmt->bindParam(':email', $email);
  $stmt->bindParam(':password', $password);
  $stmt->bindParam(':status', $status);

  $stmt->execute();

  $userid = $conn->lastInsertId();

  $sql = "INSERT INTO model_has_roles(user_id, role_id) 
VALUES (:user_id, :role_id)";

  $stmt = $conn->prepare($sql);
  $stmt->bindParam(':user_id', $userid);
  $stmt->bindParam(':role_id', $role);
  $stmt->execute();

  // this is Session 

  $_SESSION['resuccess'] = 'Create Account Successful';

  header("Location:sign-in.php");
}
