<?php
include "connection.php";
$id = $_POST['id'];
$delete = "DELETE FROM users WHERE u_id=$id";
$result = $conn->query($delete);
header("location:../users.php");