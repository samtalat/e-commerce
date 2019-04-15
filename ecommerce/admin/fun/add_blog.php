<?php
include "connection.php";
$blog_title = $_POST['title_blog'];
$blog_text = $_POST['blog_text'];
$date = date("d F,Y");

$img_name = $_FILES['img_blog']['name'];
$img_tmp = $_FILES['img_blog']['tmp_name'];
move_uploaded_file($img_tmp, "uploads/blog/$img_name");

$sql = "INSERT INTO blogs( image, title_blog, text_blog, u_date) VALUES ('$img_name','$blog_title','$blog_text','$date')";
$conn->query($sql);
header("location:../blogs.php");