<?php

    $server="localhost";
    $dbname="jstore";

    $user="root";
    $password="";

    $dsn="mysql:host=$server;dbname=$dbname";

    $pdo=new PDO($dsn,$user,$password);

    try{
        $conn=$pdo;
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    }catch(PDOException $e){
        echo "Connection Error: ".$e->getMessage();
    }
?>