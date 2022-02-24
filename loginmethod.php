<?php
require 'dbconnected.php';
session_start();
$email = $_POST['lemail'];
$password = $_POST['lpassword'];


$sql = "SELECT users.*, model_has_roles.role_id,roles.name as rolename
        FROM users
        INNER JOIN model_has_roles
        ON users.id = model_has_roles.user_id
        INNER JOIN roles 
        ON model_has_roles.role_id=roles.id
        WHERE email=:email AND password=:password";

$stmt = $conn->prepare($sql);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':password', $password);

$stmt->execute();

$user = $stmt->fetch(PDO::FETCH_ASSOC);

if ($stmt->rowCount() <= 0) {
    $_SESSION['loginfail']='Invalid Email and Password';
    header("Location: sign-in.php");
} else {
    $_SESSION['login_user']=$user;

    if ($user['rolename'] == 'admin') {
        header("Location: backend/index.php");
    }else{
        header("Location:index.php");
    }
}
