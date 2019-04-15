<?php
include "connection.php";
$name = $_POST['name'];
$price = $_POST['price'];
$count = $_POST['count'];
$code = $_POST['code'];
$rate = $_POST['rate'];
$id_cat = $_POST['cat'];
$date = date("Y-m-d");
$disc = $_POST['disc'];


$img_name = $_FILES['img']['name'];
$img_tmp = $_FILES['img']['tmp_name'];

move_uploaded_file($img_tmp, "uploads/$img_name");

$sql = "INSERT INTO  products ( name ,  price ,  count ,  code_number ,  img ,  date ,  rate ,  description ,  id_cat ) VALUES ('$name' , '$price' , '$count' , '$code' , '$img_name' , '$date' , '$rate' , '$disc' , '$id_cat')";
$result = $conn->query($sql);
header("location:../products.php");