<?php
include "connection.php";
$username = $_POST['username'];
$password = md5($_POST['password']);
$select = "SELECT * FROM manger WHERE m_username = '$username' AND m_password = '$password'";
$result = $conn->query($select);
$count = $result->num_rows;
 if ($count > 0) {
     	
     	header("location:../include/admin_add.php");
     }else {
     	 header("location:../index.php");
     }
