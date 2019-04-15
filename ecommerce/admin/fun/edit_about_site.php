<?php
include 'connection.php';
$id = $_POST['id'];
$section_subject = $_POST['section_subject'];
$section_title = $_POST['section_title'];
$section_text  = $_POST['section_text'];
$title1_mission = $_POST['title1_mission'];
$text1_mission = $_POST['text1_mission'];
$title2_mission = $_POST['title2_mission'];
$text2_mission = $_POST['text2_mission'];
$url = $_POST['url'];

if ($_FILES['background']['name']) {
	$background_name = $_FILES['background']['name'];
	$background_tmp = $_FILES['background']['tmp_name'];
	move_uploaded_file($background_tmp , "uploads/$background_name");
	$update = "UPDATE  about_site  SET   background = '$background_name'  WHERE id = $id";
	$conn->query($update);

}
if ($_FILES['section_image']['name']) {
	$section_image_name = $_FILES['section_image']['name'];
	$section_image_tmp = $_FILES['section_image']['tmp_name'];
	move_uploaded_file($section_image_tmp , "uploads/$section_image_name");
	$update = "UPDATE  about_site  SET   section_image = '$section_image_name'  WHERE id = $id";
	$conn->query($update);

}

if ($_FILES['img1_mission']['name']) {
	$img1_mission_name = $_FILES['img1_mission']['name'];
	$img1_mission_tmp = $_FILES['img1_mission']['tmp_name'];
	move_uploaded_file($img1_mission_tmp, "uploads/$img1_mission_name");
	$update = "UPDATE about_site SET img1_mission = '$img1_mission_name' WHERE id = $id";
	$conn->query($update);
}
if ($_FILES['img2_mission']['name']) {
	$img2_mission_name = $_FILES['img2_mission']['name'];
	$img2_mission_tmp = $_FILES['img2_mission']['tmp_name'];
	move_uploaded_file($img2_mission_tmp, "uploads/$img2_mission_name");
	$update = "UPDATE about_site SET img2_mission = '$img2_mission_name' WHERE id = $id";
	$conn->query($update);
}

$update = "UPDATE  about_site  SET  url_video ='$url' , section_subject ='$section_subject', section_title ='$section_title', section_text ='$section_text' , title1_mission = '$title1_mission' , text1_mission = '$text1_mission' , title2_mission = '$title2_mission' , text2_mission = '$text2_mission' WHERE id = $id";
$conn->query($update);
header("location:../about_site.php");