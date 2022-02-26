<?php
require 'dbconnected.php';

$search=$_POST['search'];

$sql="SELECT items.*, brands.id as bid, brands.name as bname, subcategories.id as sid,
subcategories.name as sname,
categories.id as cid ,categories.name as cname
FROM items 
LEFT JOIN brands
ON items.brand_id=brands.id
LEFT JOIN subcategories
ON items.subcategory_id=subcategories.id
LEFT JOIN categories
ON subcategories.category_id=categories.id
WHERE items.name=:searchs OR brands.name=:searchs  OR subcategories.name=:searchs OR categories.name=:searchs";

$stmt=$conn->prepare($sql);
$stmt->bindParam(':searchs',$search);
$stmt->execute();

$searchResults = $stmt->fetchAll();

echo json_encode($searchResults);