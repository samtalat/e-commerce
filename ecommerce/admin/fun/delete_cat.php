<?php
$id = $_GET['id'];
include "connection.php";
$delete = "DELETE FROM categoris WHERE id = $id";
$result = $conn->query($delete);
header("location:../categoris.php");