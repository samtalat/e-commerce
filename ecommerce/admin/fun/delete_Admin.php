<?php
include "connection.php";
$id = $_GET['id'];
$delete = "DELETE FROM admin WHERE id = $id";
$conn->query($delete);
header("location:../index.php");