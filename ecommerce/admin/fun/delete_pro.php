<?php
include 'connection.php';
$id = $_POST['id'];

$delete = "DELETE FROM products WHERE id = $id";
$result = $conn->query($delete);
 header("location:../products.php");