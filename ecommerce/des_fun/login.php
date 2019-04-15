<?php
if (isset($_POST['submit'])) {
session_start();

include "connection.php";
$username = $_POST['username'];
$password = md5($_POST['password']);
$select = "SELECT * FROM users WHERE u_username = '$username' AND u_password = '$password'";
$result = $conn->query($select);
$row = $result->fetch_assoc();
$id = $row['u_id'];
$count = $result->num_rows;

if ($count>0) {
	$_SESSION['username'] = $username ; 
	$_SESSION['id'] = $id;
	header("location:../index.php");
}
else{
	header("location:../login.php");
}

}