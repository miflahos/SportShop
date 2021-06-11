<?php
session_start();
include "connect/connect.php";
$connect=connection();
$name=$_POST['name'];
$price=$_POST['price'];
$discount=$_POST['discount'];
$category=$_POST['category'];
$description=$_POST['description'];
$select=$_POST['select'];
$sex=$_POST['sex'];
$img=addslashes(file_get_contents($_FILES['image']['tmp_name']));
$path="uploads/".time().$_FILES['image']['name'];
move_uploaded_file($_FILES['image']['tmp_name'], $path);
$value="SportShop/".$path;
$sql="INSERT INTO product (product_name,price,img,discount,description,category,sex,manafacturer_id) VALUES ('$name','$price','$path','$discount','$description','$category','$sex','$select')";
$result=mysqli_query($connect,$sql);
header("Location: dashboard.php");
?>