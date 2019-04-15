<?php
include "connection.php";
$name = $_POST ['name'];
$id = $_POST['id'];
$insirt = "UPDATE  categoris  SET  name ='$name' WHERE id=$id";
$result = $conn->query($insirt);
header("location:../categoris.php");