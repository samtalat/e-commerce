<?php
include "connection.php";
$username = $_POST['username'];
$password = md5($_POST['password']);
$email = $_POST['e_mail'];
$phone =$_POST['phone'];
$job = $_POST['job'];

$select = "INSERT INTO admin(ad_username, ad_password, ad_email, ad_phone, ad_job) VALUES ('$username','$password','$email','$phone','$job')";
$conn->query($select);
 header("location:../index.php");

