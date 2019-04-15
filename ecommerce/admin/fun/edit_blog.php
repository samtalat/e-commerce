<?php
include "connection.php";
$id = $_POST['id'];
$blog_title = $_POST['title_blog'];
$blog_text = $_POST['text_blog'];

if ($_FILES['img']['name']) {
	$img_name = $_FILES['img']['name'];
$img_tmp = $_FILES['img']['tmp_name'];
move_uploaded_file($img_tmp, "uploads/blog/$img_name");
	$update = "UPDATE  blogs  SET  image ='$img_name' WHERE id = $id";
	$conn->query($update);
}
$update = "UPDATE  blogs  SET   title_blog ='$blog_title', text_blog ='$blog_text' WHERE id = $id";
$conn->query($update);
header("location:../blogs.php");