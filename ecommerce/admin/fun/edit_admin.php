<?php
include "connection.php";
$id = $_POST['id'];
$username = $_POST['username'];
$email = $_POST['e_mail'];
$phone = $_POST['phone'];
$job = $_POST['job'];

if($_POST['password']){
	$pass = md5($_POST['password']);
	$update = "UPDATE admin SET ad_password = '$pass' WHERE id = $id";
	$conn->query($update);


}



$select = "UPDATE admin SET ad_username='$username', ad_email='$email',ad_phone='$phone',ad_job='$job' WHERE id= $id";

$result = $conn->query($select);

header("location:../index.php");