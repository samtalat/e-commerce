<?php
include "connection.php";
$id = $_GET['id'];
$delete = "DELETE FROM cart WHERE id = $id";
$conn->query($delete);
header("location:../index.php");