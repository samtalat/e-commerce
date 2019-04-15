<?php
if (isset($_POST['submit'])) {
     session_start();
     include "connection.php";	
     $username = $_POST['username'];
     $password = md5($_POST['password']);

     $select = "SELECT * FROM admin WHERE ad_username = '$username' AND ad_password = '$password'";
     $result = $conn->query($select);

     $count = $result->num_rows;

     if ($count > 0) {
     	$_SESSION['username'] = $username ;
     	header("location:../index.php");
     }else {
     	 header("location:../login.php");
     }







}



