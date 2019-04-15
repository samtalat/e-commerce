<?php
include "connection.php";
$id = $_POST['id'];

$select = "DELETE FROM message WHERE id = $id";
$conn->query($select);
header("location:../message.php");
